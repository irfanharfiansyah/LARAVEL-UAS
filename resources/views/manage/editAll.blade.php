@extends('layouts.masterAdmin')

@section('title', 'Manage-Article')

@section('content')
<p class=" font-weight-bold" style="font-size: 50px;">Edit Data</p>
<form action="/recipeAll/update/{{$recipe->id}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$recipe->id}}"></br>
    <div class="form-group">
        <label for="title">Judul</label>
        <input type="text" class="form-control" required="required" name="title" value="{{$recipe->title}}"></br>
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <input type="text" class="form-control" required="required" name="content" value="{{$recipe->content}}"></br>
    </div>
    <div class="form-group">
        <h6>Ingredient</h6>
        <textarea type="text" name="ingredient"  id="" cols="80" rows="9" style="margin-bottom: 20px" value="{{$recipe->ingredient}}"><?php echo $recipe['ingredient'] ?></textarea>
    </div>
    <div class="form-group">
        <h6>Method</h6>
        <textarea type="text" name="method"  id="" cols="80" rows="9" style="margin-bottom: 20px" value="{{$recipe->method}}"><?php echo $recipe['method'] ?></textarea>
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control" required="required" name="image" value="{{$recipe->featured_image}}"></br>
        <img width="150px" src="{{asset('storage/'.$recipe->featured_image)}}">
    </div>
    <button type="submit" name="edit" class="btn btn-primary float-right mb-5">Ubah Data</button>
    </form>
   @endsection