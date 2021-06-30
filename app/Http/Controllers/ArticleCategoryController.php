<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Gate;
use App\Models\ArticleCategory;
use DataTables;

class ArticleCategoryController extends Controller
{

	function __construct()
	{
		$this->middleware('auth');
		$this->middleware('permission:articlecategory-list', ['only' => ['index','store']]);
		$this->middleware('permission:articlecategory-create', ['only' => ['create','store']]);
		$this->middleware('permission:articlecategory-edit', ['only' => ['edit','update']]);
		$this->middleware('permission:articlecategory-delete', ['only' => ['destroy']]);

        $permissions_articlecategory_list = Permission::get()->filter(function($item) {
            return $item->name == 'articlecategory-list';
        })->first();
        $permissions_articlecategory_create = Permission::get()->filter(function($item) {
            return $item->name == 'articlecategory-create';
        })->first();
        $permissions_articlecategory_edit = Permission::get()->filter(function($item) {
            return $item->name == 'articlecategory-edit';
        })->first();
        $permissions_articlecategory_delete = Permission::get()->filter(function($item) {
            return $item->name == 'articlecategory-delete';
        })->first();


        if ($permissions_articlecategory_list == null) {
            Permission::create(['name'=>'articlecategory-list']);
        }
        if ($permissions_articlecategory_create == null) {
            Permission::create(['name'=>'articlecategory-create']);
        }
        if ($permissions_articlecategory_edit == null) {
            Permission::create(['name'=>'articlecategory-edit']);
        }
        if ($permissions_articlecategory_delete == null) {
            Permission::create(['name'=>'articlecategory-delete']);
        }
	}


	public function index(Request $request)
	{
		
		if ($request->ajax()) {
            $data = ArticleCategory::get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
					if (Gate::check('articlecategory-edit')) {
                        $edit = '<a href="'.route('articlecategories.edit', $row->id).'" class="btn btn-sm bg-warning-light">
                                    <i class="fe fe-pencil"></i>
                                        '.__('articlecategory.form.edit-button').'
                                </a>';
                    }else{
                        $edit = '';
                    }

                    if (Gate::check('articlecategory-delete')) {
                        $delete = '<button class="remove-articlecategory btn btn-sm bg-danger-light" data-id="'.$row->id.'" data-action="'.route('articlecategories.destroy').'">
										<i class="fe fe-trash"></i>
		                                '.__('articlecategory.form.delete-button').'
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

                            <input type='checkbox' id='status_$row->id' id='articlecategory-$row->id' class='check' onclick='changearticlecategoriestatus(event.target, $row->id);' " .$current_status. ">
							<label for='status_$row->id' class='checktoggle'>checkbox</label>
                    ";

                    return $status;
                })
                ->rawColumns(['action'])

                ->editColumn('created_at', '{{date("jS M Y", strtotime($created_at))}}')
	            ->editColumn('updated_at', '{{date("jS M Y", strtotime($updated_at))}}')
	            ->escapeColumns([])
                ->make(true);
        }
      
        return view('admin.articlecategories.index');
   
	}

	public function create()
	{
		return view('admin.articlecategories.create');
	}

	public function store(Request $request)
	{
		$rules = [
            'title' 				=> 'required|string',
			'slug' 					=> 'required|string|unique:article_categories,slug',
            'description' 			=> 'required|string',
            'status'                => 'required',
        ];

        $messages = [
            'title.required'    	=> __('articlecategory.form.validation.title.required'),
            'slug.required'    		=> __('articlecategory.form.validation.slug.required'),
            'slug.unique'    		=> __('articlecategory.form.validation.slug.unique'),
            'description.required'  => __('articlecategory.form.validation.description.required'),
        ];

        $this->validate($request, $rules, $messages);

		$input = request()->all();


		try {
			$articlecategory 		= ArticleCategory::create($input);
			$success_msg 	= __('articlecategory.message.store.success');
			return redirect()->route('articlecategories.index')->with('success',$success_msg);

		} catch (Exception $e) {
			$error_msg 		= __('articlecategory.message.store.error');
			return redirect()->route('articlecategories.index')->with('error',$error_msg);
		}

	}


	public function edit($id)
	{
		$articlecategory = ArticleCategory::find($id);
		return view('admin.articlecategories.edit',compact('articlecategory'));
	}

	public function update(Request $request, $id)
	{

        $rules = [
            'title'                 => 'required|string',
            'description'           => 'required|string',
            'status'                => 'required',
        ];

        $messages = [
            'title.required'        => __('articlecategory.form.validation.title.required'),
            'slug.required'         => __('articlecategory.form.validation.slug.required'),
            'slug.unique'           => __('articlecategory.form.validation.slug.unique'),
            'description.required'  => __('articlecategory.form.validation.description.required'),
        ];

        $this->validate($request, $rules, $messages);

		$input = $request->all();

		$articlecategory = ArticleCategory::find($id);

		try {
			$articlecategory = ArticleCategory::find($id);
			$articlecategory->update($input);
			$success_msg = __('articlecategory.message.update.success');
			return redirect()->route('articlecategories.index')->with('success',$success_msg);

		} catch (Exception $e) {
			$error_msg = __('articlecategory.message.update.error');
			return redirect()->route('articlecategories.index')->with('error',$error_msg);
		}

	}

	public function destroy()
	{

		$id = request()->input('id');

		try {
			ArticleCategory::find($id)->delete();
			$success_msg = __('articlecategory.message.destroy.success');
			return redirect()->route('articlecategories.index')->with('success',$success_msg);
		} catch (Exception $e) {
			$error_msg = __('articlecategory.message.destroy.error');
			return redirect()->route('articlecategories.index')->with('error',$error_msg);
		}
	
	}


	public function status_update(Request $request)
	{
		$articlecategory = ArticleCategory::find($request->id)->update(['status' => $request->status]);
        return response()->json(['success'=>'Status changed successfully.']);
	}



}