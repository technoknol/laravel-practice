<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\UpdatePostRequest;
use App\Post;
use Illuminate\Http\Request;
use function compact;

/**
 * Class PostController
 * @package App\Http\Controllers
 */
class PostController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('user', 'categories')->get();
        return view('post.index', compact('posts' ));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::with('user', 'categories', 'comments', 'comments.user', 'comments.childs')->find($id);
        $comments = $post->comments;
//        echo '<pre>';   print_r($comments->toArray()); die();
        return view('post.show', compact('post', 'comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::with('user', 'categories')->find($id);
        $categories = Category::all();
        return view('post.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Post $post
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return void
     */
    public function update(UpdatePostRequest $request, $id)
    {
        $input = $request->all();
        $post = Post::findorfail($id);
        $post->update($input);
        return redirect('posts');
//        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
