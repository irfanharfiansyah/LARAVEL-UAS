<?php

namespace App\Http\Controllers;
use App\Recipe;
use PDF;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Cache;
class recipeAllController extends Controller
{
        public function index(){

            $recipe = Recipe::all();
            return view('manage.manageAll',['recipe' => $recipe]);
        }
        public function add(){

            return view('manage.addAll');
        }
        public function create(Request $request){
            if($request->file('image')){
                $image = $request->file('image')->store('images','public');
                } 
            Recipe::create([
            'title' => $request->title,
            'content' => $request->content,
            'ingredient' => $request->ingredient,
            'method' => $request->method,
            'featured_image' => $image
            ]);
            return redirect('/manageAll');
        }
        public function edit($id){

            $recipe = Recipe::find($id);
            return view('manage.editAll',['recipe'=>$recipe]);
        }
        public function update($id, Request $request){

            $recipe = Recipe::find($id);
            $recipe->title = $request->title;
            $recipe->content = $request->content;
            $recipe->ingredient = $request->ingredient;
            $recipe->method = $request->method;
            if($recipe->featured_image && file_exists(storage_path('app/public/' . $recipe->featured_image)))
            {
                \Storage::delete('public/'.$recipe->featured_image);
            }
            $image = $request->file('image')->store('images', 'public');
            $recipe->featured_image = $image;
            $recipe->save();
            return redirect('/manageAll');
        }
        public function delete($id){

            $recipe = Recipe::find($id);
            $recipe->delete();
            return redirect('/manageAll');
        }
        public function article($id){

            $recipe= Recipe::find($id);
            $komen =  \App\Comment::all();
            return view('recipeAll', ['recipe'=>$recipe, 'komen'=>$komen,'id'=>$id]);
        
        }
        public function insertData(Request $req, $id, Faker $faker){

            $faker = Faker::create();
            $hasil = Recipe::find($id);
            $user = new \App\Comment();
            $user->name = $req->nama;
            $user->comment = $req->komentar;
            $user->id_article = $req->id;
            $user->profile_photo = $faker->image();
            $user-> save();
            return redirect()->action('recipeAllController@article',['id'=>$id]);
        }
        public function cetak_pdf(){
            $recipe = recipe::all();
            $pdf = PDF::loadview('ReportAdm.recipe_pdf',['recipe'=>$recipe]);
            return $pdf->stream();
       }

}
    

