<?php

namespace App\Http\Controllers;

use App\Models\Articel;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.blogs.index',[
            'title' => "Blog",
            'display' => "Blog",
            'blogs' => Articel::latest()->paginate(20)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.blogs.input',[
            'title' => 'Create New Blog',
            'display' => 'Create New Blog',
            'categories' => Category::all()
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
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'category_id' => 'required',
            'images' => 'image',
            'body' => 'required'
        ]);

        if($request->file('images')){
            $validateData['images'] = $request->file('images')->store('images');
        }

        $validateData['user_id'] = auth()->user()->id;
        $validateData['slug'] = Str::slug($request->title, '-');
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 150, '...');
        Articel::create($validateData);
        return redirect('blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Articel  $articel
     * @return \Illuminate\Http\Response
     */
    public function show(Articel $blog)
    {
        return view('dashboard.blogs.show',[
            'title' => $blog->title,
            'display' => "Show Articel"
        ]
        , compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Articel  $articel
     * @return \Illuminate\Http\Response
     */
    public function edit(Articel $blog)
    {
        return view('dashboard.blogs.edit',[
            'title' => "Edit | $blog->title",
            'display' => 'Menu Edit',
            'categories' => Category::all()
        ], compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Articel  $articel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Articel $blog)
    {
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'category_id' => 'required',
            'images' => 'image',
            'body' => 'required'
        ]);
        
        if($request->file('images')){
            if($request->oldimage){
                Storage::delete($request->oldimage);
            }
            $validateData['images'] = $request->file('images')->store('images');
        }

        $validateData['user_id'] = auth()->user()->id;
        $validateData['slug'] = Str::slug($request->title, '-');
        $validateData['excerpt'] = Str::limit(strip_tags($request->body), 100 ,'...');

        $blog::where('id', $blog->id)
                ->update($validateData);
        return redirect('blog')->with('edit', 'blog ber');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Articel  $articel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Articel $blog)
    {
        if ($blog->images) {
            Storage::delete($blog->images);
        }
        $blog->delete();
        return redirect('blog');
    }
}
