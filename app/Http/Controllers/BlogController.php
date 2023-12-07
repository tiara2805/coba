<?php

namespace App\Http\Controllers;

use App\Models\blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = blog::all();
        return view('blog.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        blog::create($request->all());
        return redirect('blog');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = blog::find($id);
        return view ('blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, blog $blog)
    {
        $data = $request->all();
        $data1 ['id'] = $request->id;
        $blog->update($data);
        return redirect('blog');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = blog::where('id',$id)
        ->delete();

        return redirect('/blog');
    }
}
