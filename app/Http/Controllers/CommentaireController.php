<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentaireController extends Controller
{
    public function show()
    {
        // $comments=Comment::All();
        
        $comments = comment::with(['users' => function($a){$a->select('name');}])->get();
// Post::select('SubTitle')->where('id', $id)->comments->get();
// $post=post::whereId($id)->with('comments')->with(['user' => function($a){$a->select('id', 'name','profile');}])->get();

        return $comments;
        //
    }
    //
}
