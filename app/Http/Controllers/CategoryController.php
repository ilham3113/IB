<?php

namespace App\Http\Controllers;

use App\Models\Articel;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.category.index',[
            'title' => 'Category',
            'display' => 'Category',
            'categories' => Category::latest()->limit(7)->get(),
            'all' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.category.input',[
            'title' => 'Create New Category',
            'display' => 'Create New Category',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Data = $request->validate([
            'name' => 'required|max:255'
        ]);
        $Data['slug'] = Str::slug($request->name, '-');
        Category::create($Data);
        return redirect('blog');
    }

    /*
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('dashboard.category.show',[
            'title' => "Category $category->name",
            'display'=> "Show $category->name",
            'categories' => $category->articel
        ],compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('dashboard.category.edit',[
            'title' => "Edit nama Category",
            'display' => "Edit name Category"
        ], compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $Data = $request->validate([
            'name' => 'required|max:255'
        ]);

        $Data['slug'] = Str::slug($request->name, '_');

        $category::where('id', $category->id)
                    ->update($Data);
        return redirect('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }

    public function all(){
        return view('dashboard.category.all',[
            'title' => 'Category',
            'display' => 'Category',
            'categories' => Category::all()
        ]);
    }
}
