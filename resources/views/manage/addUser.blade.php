@extends('layouts.masterAdmin')

@section('title', 'Add-User')

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
        <label for="password">Password</label>
        <input type="text" class="form-control" required="required" name="password"></br>
    </div>
    <div class="form-group">
        <label for="roles" name="roles" >Roles</label>
        <select id="roles" class="form-control" name="roles" >
            <option>- Pilih Roles</option>
            <option name="roles" value="Administrator">Admin</option>
            <option name="roles" value="User">User</option>
        </select>
    </div>
    <div class="form-group">
        <label for="image">Photo</label>
        <input type="file" class="form-control" required="required" name="image"></br>
    </div>
    <button type="submit" name="add" class="btn btn-primary float-right">Tambah Data</button>
</form>
@endsection