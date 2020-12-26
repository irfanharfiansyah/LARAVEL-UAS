@extends('layouts.masterAdmin')

@section('title', 'Manage-Article')

@section('content')
<p class=" font-weight-bold" style="font-size: 50px;">Edit Data</p>
<form action="/recipePop/update/{{$popular->id}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$popular->id}}"></br>
    <div class="form-group">
        <label for="title">Judul</label>
        <input type="text" class="form-control" required="required" name="title" value="{{$popular->title}}"></br>
    </div>
    <div class="form-group">
        <label for="content">Content</label>
        <input type="text" class="form-control" required="required" name="content" value="{{$popular->content}}"></br>
    </div>
    <div class="form-group">
        <h6>Ingredient</h6>
        <textarea type="text" name="ingredient"  id="" cols="80" rows="9" style="margin-bottom: 20px" ><?php echo $popular['ingredient'] ?></textarea>
    </div>
    <div class="form-group">
        <h6>Method</h6>
        <textarea type="text" name="method"  id="" cols="80" rows="9" style="margin-bottom: 20px"><?php echo $popular['method'] ?></textarea>
    </div>
    <div class="form-group">
        <label for="image" value="{{$popular->featured_image}}" >Image</label>
        <input type="file" class="form-control" required="required" name="image" value="{{$popular->featured_image}}"/></br>
        <img width="150px" src="{{asset('storage/'.$popular->featured_image)}}">
    </div>
    <button type="submit" name="edit" class="btn btn-primary float-right mb-5">Ubah Data</button>
</form>

 @endsection  
 
