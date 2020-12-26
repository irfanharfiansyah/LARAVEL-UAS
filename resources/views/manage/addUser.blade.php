@extends('layouts.masterAdmin')

@section('title', 'Manage-User')

@section('content')
<p class=" font-weight-bold" style="font-size: 50px;">Add Data User</p>
<form action="/user/create" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Nama</label>
        <input type="text" class="form-control" required="required" name="name"></br>
    </div>
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="text" class="form-control" required="required" name="email"></br>
    </div>
    <div class="form-group">
        <label for="passwordt">Password</label>
        <input type="text" class="form-control" required="required" name="password"></br>
    </div>
    <div class="form-group">
        <label for="roles" name="roles" value="{{$user->roles}} ">Roles</label>
        <select id="roles" class="form-control" name="roles" >
            <option value="{{$user->roles}}">- Pilih Roles</option>
            <option name="roles" value="{{$user->roles}}">Admin</option>
            <option name="roles" value="{{$user->roles}}">User</option>
        </select>
    </div>
    <div class="form-group">
        <label for="image">Photo</label>
        <input type="file" class="form-control" required="required" name="image"></br>
    </div>
    <button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button>
</form>
@endsection