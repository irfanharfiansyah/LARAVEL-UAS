<?php

namespace App\Http\Controllers;
use App\Popular;
use App\Comment;
use PDF;
use Faker\Factory as Faker;
use Illuminate\Http\Request;

class recipePopController extends Controller
{
    public function article($id){
        $popular= Popular::find($id);
        $komen =  \App\Comment::all();
        return view('recipePop', ['popular'=>$popular, 'komen'=>$komen,'id'=>$id]);
    
    }
    public function insertData(Request $req, $id, Faker $faker){
        $faker = Faker::create();
        $hasil = Popular::find($id);
        $user = new \App\Comment();
        $user->name = $req->nama;
        $user->comment = $req->komentar;
        $user->id_article = $req->id;
        $user->profile_photo = $faker->image();
        $user-> save();
        return redirect()->action('recipePopController@article',['id'=>$id]);
    }
    public function index(){

        $popular = popular::all();
        return view('manage.managePop',['popular' => $popular]);
    }
    public function add(){

        return view('manage.addPop');
    }
    public function create(Request $request){
        if($request->file('image')){
            $image = $request->file('image')->store('images','public');
            }   
        popular::create([
        'title' => $request->title,
        'content' => $request->content,
        'ingredient' => $request->ingredient,
        'method' => $request->method,
        'featured_image' => $image
        ]);
        return redirect('/managePop');
    }
    public function edit($id){

        $popular = Popular::find($id);
        return view('manage.editPop',['popular'=>$popular]);
    }
    public function update($id, Request $request){
        $popular = Popular::find($id);
        $popular->title = $request->title;
        $popular->content = $request->content;
        $popular->ingredient = $request->ingredient;
        $popular->method = $request->method;
        if($popular->featured_image && file_exists(storage_path('app/public/' . $popular->featured_image)))
        {
            \Storage::delete('public/'.$popular->featured_image);
        }
        $image = $request->file('image')->store('images', 'public');
        $popular->featured_image = $image;
        $popular->save();
        return redirect('/managePop');
    }
    public function delete($id){

        $popular = Popular::find($id);
        $popular->delete();
        return redirect('/managePop');
    }
    public function cetak_pdf(){
        $popular = Popular::all();
        $pdf = PDF::loadview('ReportAdm.popular_pdf',['popular'=>$popular]);
        return $pdf->stream();
   }
}
