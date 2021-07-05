<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Gate;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\User;
use DataTables;
use Auth;

class ArticleController extends Controller
{

	function __construct()
	{
		$this->middleware('auth');
		$this->middleware('permission:article-list', ['only' => ['index','store']]);
		$this->middleware('permission:article-create', ['only' => ['create','store']]);
		$this->middleware('permission:article-edit', ['only' => ['edit','update']]);
		$this->middleware('permission:article-delete', ['only' => ['destroy']]);

        $permissions_article_list = Permission::get()->filter(function($item) {
            return $item->name == 'article-list';
        })->first();
        $permissions_article_create = Permission::get()->filter(function($item) {
            return $item->name == 'article-create';
        })->first();
        $permissions_article_edit = Permission::get()->filter(function($item) {
            return $item->name == 'article-edit';
        })->first();
        $permissions_article_delete = Permission::get()->filter(function($item) {
            return $item->name == 'article-delete';
        })->first();


        if ($permissions_article_list == null) {
            Permission::create(['name'=>'article-list']);
        }
        if ($permissions_article_create == null) {
            Permission::create(['name'=>'article-create']);
        }
        if ($permissions_article_edit == null) {
            Permission::create(['name'=>'article-edit']);
        }
        if ($permissions_article_delete == null) {
            Permission::create(['name'=>'article-delete']);
        }
	}


	public function index(Request $request)
	{
		
		if ($request->ajax()) {
            $data = Article::get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
					if (Gate::check('article-edit')) {
                        $edit = '<a href="'.route('articles.edit', $row->id).'" class="btn btn-sm bg-warning-light">
                                    <i class="fe fe-pencil"></i>
                                        '.__('article.form.edit-button').'
                                </a>';
                    }else{
                        $edit = '';
                    }

                    if (Gate::check('article-delete')) {
                        $delete = '<button class="remove-article btn btn-sm bg-danger-light" data-id="'.$row->id.'" data-action="'.route('articles.destroy').'">
										<i class="fe fe-trash"></i>
		                                '.__('article.form.delete-button').'
									</button>';
                    }else{
                        $delete = '';
                    }

                    $action = $edit.' '.$delete;
                    return $action;
                })

                ->addColumn('status', function($row){

                	if ($row->status == 1) {
                		$current_status = 'Checked';
                	}else{
                		$current_status = '';
                	}

                    $status = "

                            <input type='checkbox' id='status_$row->id' id='article-$row->id' class='check' onclick='changearticlestatus(event.target, $row->id);' " .$current_status. ">
							<label for='status_$row->id' class='checktoggle'>checkbox</label>
                    ";

                    return $status;
                })
                ->rawColumns(['action'])



                ->addColumn('user_id', function($row){
                    $user = User::find($row->user_id);
                    return $user->name;
                })
                ->addColumn('category', function($row){
                    $category = ArticleCategory::find($row->article_category_id);
                    return $category->title;
                })

                ->editColumn('created_at', '{{date("jS M Y", strtotime($created_at))}}')
	            ->editColumn('updated_at', '{{date("jS M Y", strtotime($updated_at))}}')
	            ->escapeColumns([])
                ->make(true);
        }
      
        return view('admin.articles.index');
   
	}

	public function create()
	{
        $article_categories = ArticleCategory::get();
		return view('admin.articles.create', compact('article_categories'));
	}

	public function store(Request $request)
	{
		$rules = [
            'title' 				=> 'required|string',
			'slug' 					=> 'required|string|unique:articles,slug',
            'description' 			=> 'required|string',
            'status'                => 'required',
            'article_category_id'   => 'required',
        ];

        $messages = [
            'title.required'    	=> __('article.form.validation.title.required'),
            'slug.required'    		=> __('article.form.validation.slug.required'),
            'slug.unique'    		=> __('article.form.validation.slug.unique'),
            'description.required'  => __('article.form.validation.description.required'),
        ];

        $this->validate($request, $rules, $messages);

		$input = request()->all();

        $input['user_id'] = Auth::user()->id;


		try {
			$article 		= Article::create($input);
			$success_msg 	= __('article.message.store.success');
			return redirect()->route('articles.index')->with('success',$success_msg);

		} catch (Exception $e) {
			$error_msg 		= __('article.message.store.error');
			return redirect()->route('articles.index')->with('error',$error_msg);
		}

	}


	public function edit($id)
	{
		$article = Article::find($id);
        $article_categories = ArticleCategory::get();
		return view('admin.articles.edit',compact('article','article_categories'));
	}

	public function update(Request $request, $id)
	{

        $rules = [
            'title'                 => 'required|string',
            'description'           => 'required|string',
            'status'                => 'required',
            'article_category_id'   => 'required',
        ];

        $messages = [
            'title.required'        => __('article.form.validation.title.required'),
            'slug.required'         => __('article.form.validation.slug.required'),
            'slug.unique'           => __('article.form.validation.slug.unique'),
            'description.required'  => __('article.form.validation.description.required'),
        ];

        $this->validate($request, $rules, $messages);

		$input = $request->all();

		$article = Article::find($id);

		try {
			$article = Article::find($id);
			$article->update($input);
			$success_msg = __('article.message.update.success');
			return redirect()->route('articles.index')->with('success',$success_msg);

		} catch (Exception $e) {
			$error_msg = __('article.message.update.error');
			return redirect()->route('articles.index')->with('error',$error_msg);
		}

	}

	public function destroy()
	{

		$id = request()->input('id');

		try {
			Article::find($id)->delete();
			$success_msg = __('article.message.destroy.success');
			return redirect()->route('articles.index')->with('success',$success_msg);
		} catch (Exception $e) {
			$error_msg = __('article.message.destroy.error');
			return redirect()->route('articles.index')->with('error',$error_msg);
		}
	
	}


	public function status_update(Request $request)
	{
		$article = Article::find($request->id)->update(['status' => $request->status]);
        return response()->json(['success'=>'Status changed successfully.']);
	}



}