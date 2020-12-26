@extends('layouts.masterAdmin')

@section('title', 'Manage-Article')

@section('content')
<p class=" font-weight-bold" style="font-size: 50px;">Add Data All Recipes </p>
<form action="/recipeAll/create" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Judul</label>
        <input type="text" class="form-control" required="required" name="title"></br>
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <input type="text" class="form-control" required="required" name="content"></br>
    </div>
    <div class="form-group">
        <h6>Ingredient</h6>
        <textarea type="text" name="ingredient"  id="" cols="80" rows="9" style="margin-bottom: 20px" ></textarea>
    </div>
    <div class="form-group">
        <h6>Method</h6>
        <textarea type="text" name="method"  id="" cols="80" rows="9" style="margin-bottom: 20px" ></textarea>
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control" required="required" name="image"></br>
    </div>
    <button type="submit" name="add" class="btn btn-primary float-right mb-5">Tambah Data</button>
</form>
@endsection