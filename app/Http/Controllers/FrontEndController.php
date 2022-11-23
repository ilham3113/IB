<?php

namespace App\Http\Controllers;

use App\Models\Articel;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        $title = '';
        if(request('category')) {
            $category = Category::firstwhere('slug', request('category'));
            $title = '| in Category ' . $category->name;
        }

        if (request('search')){
            $search = request('sreach');
            $title = '| Search ' .request('search');
        }
        return view('front-end.index',[
            'title' => "Ilham Blogs " . $title,
            'navcategories' => Category::limit(10)->get(),
            'Articles' =>Articel::latest()->search(request(['search', 'category']))->paginate(10)->withQueryString(),

        ]);
    }

    public function view(Articel $article)
    {
        return view('front-end.articel',[
            'title' => $article->title,
            'article' => $article,
        ]);
    }
}
