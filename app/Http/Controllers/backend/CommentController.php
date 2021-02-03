<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\models\About;
use App\models\Comment;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_count = Settings::getValue('admin_pagination');
        $comments = Comment::orderBy('time','DESC')->paginate($page_count);
        return view('backend.comment.index',compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_id = Auth::id();
        return view('backend.comment.create',compact('user_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' =>  'required|min:3',
            'position'  => 'required|min:3',
            'image'  => 'required',
            'comment'  => 'required',
        ]);
        Comment::add($request->all(), $request->file('image'));
        return redirect()->route('admin-comment.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comment = Comment::find($id);
        return view('backend.comment.view',compact('comment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comment = Comment::find($id);
        $user_id = $comment->user_id;
        return view('backend.comment.edit',compact('comment','user_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' =>  'required|min:3',
            'position'  => 'required|min:3',
//            'image'  => 'required',
            'comment'  => 'required',
        ]);

        $comment = Comment::find($id);
        if ($request->file('image')){

            Comment::deleteImage($comment->image);
        }
        $comment->edit($request->all(), $request->file('image'));
        return redirect()->route('admin-comment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);
        if($comment->delete())
        {
            Comment::deleteImage($comment->image);
            return back();
        }
    }
}
