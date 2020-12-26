@extends('layouts.master')

@section('title', 'Recipe-All')

@section('content')
<div class="recipeAll">
  <div class="content-all">
    <p class="titleAll">Enjoy Cooking</p>
    <img class="logo" src="/img/logo.png" alt="tungguu">
  </div>
  <div class="container">
    <p class="food">FOOD</p>
    <form action="/searchAll" method="GET" class="los form-inline">
      <input class="form-control mr-sm-2 text-dark" type="text" placeholder="Search" name="search"   style="outline: none">
      <button class="btn btn-dark " type="submit"><i class="fas fa-search"></i></button>
    </form>
    <div class="content-recipe ">
      @foreach ($recipe as $r)
      <div class="col-md-6">
        <div class="all card mb-3" style="width: 33rem;">
          <div class="row no-gutters">
            <div class="col-md-4">
              <img src="{{asset('/storage/'.$r->featured_image)}}" class="card-img" alt="..." style="height: 320px;">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">{{ Str::limit($r->title, 30, '...')}}</h5>
                <p class="card-text">{{ Str::limit($r->content, 150, '...')}}</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                <a href="{{ 'recipeAll/recipe/'.$r->id }}"><button class="goRecipe"><i class="fas fa-arrow-right"></i></button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    {{$recipe->links()}}
  </div>
  @include('layouts.footer')
</div>
@endsection