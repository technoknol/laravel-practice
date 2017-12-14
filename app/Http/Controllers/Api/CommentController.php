<?php

namespace App\Http\Controllers\Api;

use App\Comment;
use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;

/**
 * Class CommentController
 * @package App\Http\Controllers\Api
 */
class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($post)
    {
        return Comment::where('post_id', $post)->with('childs')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CommentRequest $request
     * @param $id
     * @param $post_id
     * @return \Illuminate\Http\Response
     */
    public function store(CommentRequest $request)
    {
        $comment = (new Comment)->fill([
            'body' => $request->input('body'),
            'user_id' => auth()->id(),
            'post_id' => $request->input('post_id'),
            'parent_id' => $request->input('parent_id'),
        ]);
        $comment->save();
        return Comment::with('user')->find($comment->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
