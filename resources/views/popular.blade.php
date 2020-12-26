@extends('layouts.master')

@section('title', 'Popular')

@section('content')
<div class="popular">
    <div class="container">
        <div class="jumbotron jumbotron-fluid">   
            <p class="text1">Recipes that are <br> very much in demand</p>
            <form action="/search" method="GET" class="form-inline">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" name="search"   style="outline: none">
                <button class="btn btn-dark " type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
        
        <div class="content-populer">
            <p class="title">Our Popular Recipes</p>
            <img class="line1" src="../img/line 6.svg" alt="">
            <div class="pop">
                @foreach ($popular as $p)
                
                    <div class="col-sm-4">
                        <div class="card" style="width: 20rem;">
                            <img src="{{asset('/storage/'.$p->featured_image)}}" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title"> {{ Str::limit($p->title, 20, '...')}}</h5>
                            <p class="card-text">{{ Str::limit($p->content, 50, '...')}}</p>
                            <a href="{{ 'popular/recipePop/'.$p->id }}"><button>Recipe</button></a>
                            </div>
                        </div>
                    </div>
                   
                 @endforeach 
            </div> 
            <a href="/recipeAll"><button class="btnd">Explore All Recipe</button></a>
        </div>
    </div>
</div>    
@include('layouts.footer')        
@endsection