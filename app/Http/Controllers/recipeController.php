<?php

namespace App\Http\Controllers;
use App\Recipe;
use DB;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Cache;
class recipeController extends Controller
{
    public function index(){
        
        Cache::remember('recipe', 5, function(){
              return $recipe = Recipe::paginate(6);
 
      });
        $recipe = Cache::get('recipe');
        return view('recipe')->with(compact('recipe'));
     }
     public function search(Request $request){
      $search = $request->search;
      $result = \DB::table('recipes')->WHERE('title', 'LIKE', "%".$search."%")->paginate();
      return view('recipe',['recipe'=>$result]);
  }
      public function __construct() {
        $this->middleware('auth');
        // $this->middleware(function($request, $next){
        // if(Gate::allows('admin')) return $next($request);
        // abort(403, 'Anda tidak memiliki cukup hak akses');
        // });
    }
    public function cetak_pdf($id){
        $recipe = Recipe::find($id);
        $pdf = PDF::loadview('ReportUser.recipeAll_pdf',['recipe'=>$recipe, 'id'=>$id]);
        return $pdf->stream();
   }

}
