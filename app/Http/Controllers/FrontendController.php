<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\ArticleCategory;
use Auth;
use Session;

class FrontendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $articles           = Article::where('status',1)->get();
        $article_categories = ArticleCategory::where('status',1)->get();
        return view('frontend.index', compact('articles', 'article_categories'));
    }


    public function article($slug)
    {
        $page = Article::where('slug', $slug)->where('status', 1)->first();
        if (!$page) {
            return abort(404);
        }
        return view('frontend.page',compact('page'));
    }


    public function article_category($slug)
    {
        $category = ArticleCategory::where('slug', $slug)->where('status', 1)->first();

        $articles = Article::where('article_category_id', $category->id)->where('status', 1)->get();
        return view('frontend.category',compact('category', 'articles'));
    }


    public function search(Request $request) {
        if(isset($request->q) && !empty($request->q)) {
            $query = $request->q;
            $articles = Article::query()
            ->where('title', 'LIKE', "%{$query}%") 
            ->orWhere('description', 'LIKE', "%{$query}%") 
            ->paginate(10);

            $articles->appends(['q' => $query]);

            return view('frontend.search', compact('articles'));
        }

        return back();
    }


   


}
