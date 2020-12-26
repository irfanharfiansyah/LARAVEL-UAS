<?php

namespace App\Http\Controllers;
use App\Popular;
use DB;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
class PopularController extends Controller
{
    public function index(){
        
        Cache::remember('popular', 10, function(){
              return Popular::all();
 
      });
          $popular = Cache::get('popular');
         return view('popular')->with(compact('popular'));
     }
     
    public function search(Request $request){
        $search = $request->search;
        $result = \DB::table('populars')->WHERE('title', 'LIKE', "%".$search."%")->paginate();
        return view('popular',['popular'=>$result]);
    }
    
    public function cetak_pdf($id){
        $popular = Popular::find($id);
        $pdf = PDF::loadview('ReportUser.recipePop_pdf',['popular'=>$popular, 'id'=>$id]);
        return $pdf->stream();
   }
}
