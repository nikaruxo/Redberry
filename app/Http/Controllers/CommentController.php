<?php

namespace App\Http\Controllers;

use App\Models\Recruitement;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function storeComment(Request $request){


        $formFields = $request->validate([
            'candidate_id'=> '',
            'status_id' => '',
            'comment' => '',
            
        ]);
        Comment::create($formFields);

        return redirect('/')->with('message','Comment successfully added to Timeline!');
    }
}
