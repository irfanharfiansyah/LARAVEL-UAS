@extends('layouts.masterAdmin')

@section('title', 'Edit-User')

@section('content')
<p class=" font-weight-bold" style="font-size: 50px;">Edit Data</p>
<form action="/user/update/{{$user->id}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="hidden" name="id" value="{{$user->id}}"></br>
    <div class="form-group">
        <label for="name">Nama</label>
        <input type="text" class="form-control" required="required" name="name" value="{{$user->name}}"></br>
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="text" class="form-control" required="required" name="email" value="{{$user->email}}"></br>
    </div>
    <div class="form-group">
        <label for="roles" name="roles" value="{{$user->roles}} ">Roles</label>
        <select id="roles" class="form-control" name="roles" >
            <option value="{{$user->roles}}">{{$user->roles}}</option>
            <option name="roles" value="{{$user->roles}}">Admin</option>
            <option name="roles" value="{{$user->roles}}">User</option>
        </select>
    </div>
    <div class="form-group">
        <label for="image">Photo</label>
        <input type="file" class="form-control" required="required" name="image" value="{{$user->featured_image}}"></br>
    </div>
    <img height="120px" src="{{asset('/storage/'.$user->image)}}" style="border: 1px solid rgba(161, 161, 161, 0.582)">
    <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Data</button>
    </form>
 @endsection  