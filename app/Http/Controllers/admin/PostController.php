<?php

namespace App\Http\Controllers\admin;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.post.show');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;
        $post->title=$request->get('title');
        $post->author=$request->get('author');
        $post->descrption=$request->get('descrption');
        $post->save();
        echo "<h2>Data Send Succesfully</h2>";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $posts)
    {
        $alu  = Post::all();
        return view('admin.post.show',['posts' => $alu]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post, $id)
    {
       $postsEdit=  Post::find($id);
       return view('admin.post.edit',['posts' =>$postsEdit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $posts, $id)
    {
        $posts             = Post::find($id);
        $posts->descrption = $request->get('descrption');
        $posts->title      = $request->get('title');
        $posts->author     = $request->get('author');
        $posts->save();
        return  redirect()->back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $posts, $id)
    {
       $post= Post::find($id);
       $post->delete();
       return redirect('show');
    }
}
