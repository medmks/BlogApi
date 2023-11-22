<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $posts=Post::find(2)->comments()->get();
            // $posts=Post::all();
        $posts = Post::with(['user' => function($a){$a->select('id', 'name','profile');}])->get();

        return $posts;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $post=post::whereId($id)->with('comments')->with(['user' => function($a){$a->select('id', 'name','profile');}])->get();
        $post_detaileed=post::whereId($id)->with(['user'=> function($a){$a->select('id','name');}])->with(['comments'=>function($r){$r->select('*')->where('post_id',$id);}])->with(['comments.user'=>function($q){$q->select('id','name','profile');}])->get();
// Post::select('SubTitle')->where('id', $id)->comments->get();
        return $post_detaileed;
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
//NOTE:post::whereId(2)->with('comments')->with(['user' => function($a){$a->select('id', 'name');}])->get();
//HACK: post::whereId(2)->with('comments')->with('user')->get();



// comment::where('post_id',2)->with(['user'=>function($q){$q->select('id','name');}])->get();


// > post::whereId(2)->with(['user'=> function($a){$a->select('id','name');}])->with(['comments'=>function($r){$r->select('*')->where('post_id',2);}])->get();
