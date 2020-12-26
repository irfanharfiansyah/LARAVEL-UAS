<?php

namespace App\Http\Controllers;
use App\Comment;
use App\User;
use Illuminate\Http\Request;

class commentController extends Controller
{
    
    public function index(){
        $user = user::all();
        $comment = Comment::all();
        return view('manage.manageCom',['comment' => $comment, 'user' => $user]);
    }
    public function delete($id){

        $comment = Comment::find($id);
        $comment->delete();
        return redirect('/manageCom');
    }
}
