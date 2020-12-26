
 @extends('layouts.master')

 @section('title', 'Recipe-Detail')
 
 @section('content')
 
 <div class="recipePop">
     
     <div class="container"> 
         <div class="titlePop">
             <div class="row">
                 <div class="col-md-7">
                     <h5 class="card-title">{{ Str::limit($recipe->title, 50, '...')}}</h5>
                     <p class="card-text text-align: justify;" style="font-family: poppins">{{$recipe->content}}</p>
                     <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                     <a href="/recipeAll/cetak_pdf/{{$recipe->id}}" class="btn btn-success"target="_blank">CETAK PDF <i class="fas fa-file-pdf"></i> </a>         
                 </div>
                 <div class="col-md-5">
                     <img class="img-top" src="{{asset('/storage/'.$recipe->featured_image)}}" alt="">
                 </div>
             </div>
         </div>
         <div class="article row">
            @include('layouts.ingreMet2')
         </div>
         <div class="card my-5 mb-5" style="width: 160vh">
             <h5 class="card-header bg-dark-gray">Leave a Comment</h5>
             <div class="card-body">  
                 <form action="" method="post">
                 {{csrf_field()}}
                 <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
                          <p>Name : {{ Auth::user()->name }}</p>  
                     <div class="form-group">
                         <input class="form-control" type="hidden" name="nama" value="{{ Auth::user()->name }}" >
                     </div>
                     <div class="form-group">
                          <p>Comment :</p>  
                         <input class="form-control" type="text" name="komentar">
                     </div>
                     <input type="submit" class="btn btn-primary">
                 </form>
             </div>
         </div>
         @foreach ($komen as $k)
         @if ($k->id_article==$id)
         <div class="media mb-4"> 
            <img class=" mr-3 rounded-circle" width="50px" src="{{asset('/storage/'.Auth::user()->image)}}" alt="">
             <div class="media-body">
                 <h5 class="mt-0" style="font-size: 20px;">{{$k->name}}</h5>
                 <p>{{$k->comment}}</p>
             </div>
         </div>
         @endif            
         @endforeach
     </div>  
     @include('layouts.footer')
 </div>
 
 @endsection