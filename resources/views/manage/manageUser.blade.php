@extends('layouts.masterAdmin')

@section('title', 'Manage-User')

@section('content')
<style>
    tr.text-center td{
        vertical-align: middle
    }
</style>
<div class="container">
    <a href="/user/cetak_pdf" class="btn btn-success"target="_blank">CETAK PDF <i class="fas fa-file-pdf"></i></a>
    <p class=" font-weight-bold" style="font-size: 50px;">Table User</p>
    <table class="table table-bordered table-striped">
        <thead>
            <tr class=" text-center">
                <th>Image</th>
                <th>Nama</th>
                <th>E-mail</th>
                <th>Roles</th>
                <th><i class="fas fa-edit"></i></th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $u)
            <tr class=" text-center">
                    <td><img height="80px" src="{{asset('/storage/'.$u->image)}}"></td>
                    <td>{{$u->name}}</td>
                    <td>{{$u->email}}</td>
                    <td>{{$u->roles}}</td>
                    <td>
                        <a href="user/delete/{{ $u->id }}" class="badge badge-danger">Hapus</a>
                        <a href="user/edit/{{ $u->id }}" class="badge badge-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> 
    <a href="user/add" class="btn btn-primary mb-5">Tambah Data</a>  
</div>
@endsection