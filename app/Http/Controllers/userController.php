<?php

namespace App\Http\Controllers;
use App\User;
use PDF;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;
use Faker\Factory as Faker;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index(){

        $user = user::all();
        return view('manage.manageUser',['user' => $user]);
    }
    public function add(){

        return view('manage.addUser');
    }
    public function create(Request $request){
        if($request->file('image')){
            $image = $request->file('image')->store('imageUser','public');
            }      
        User::create([
        'name' => $request->name,
        'email' => $request->email,
        'roles' => $request->roles,
        'password' => \Hash::make ($request->password),
        'image'=> $image
        ]);
        return redirect('/manageUser');
    }
    public function edit($id){

        $user = User::find($id);
        return view('manage.editUser',['user'=>$user]);
    }
    public function update($id, Request $request){

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->roles = $request->roles;
        if($user->image && file_exists(storage_path('app/public/' . $user->image)))
        {
            \Storage::delete('public/'.$user->image);
        }
        $image = $request->file('image')->store('imageUser', 'public');
        $user->image = $image;
        $user->save();
        return redirect('/manageUser');
    }
    public function delete($id){

        $user = user::find($id);
        $user->delete();
        return redirect('/manageUser');
    }
    public function search(Request $request){
        $search = $request->search;
        $result = \DB::table('users')->WHERE('name', 'LIKE', "%".$search."%")->paginate();
        return view('manageUser',['user'=>$result]);
    }

    public function cetak_pdf(){
        $user = User::all();
        $pdf = PDF::loadview('ReportAdm.User_pdf',['user'=>$user]);
        return $pdf->stream();
   }
}
