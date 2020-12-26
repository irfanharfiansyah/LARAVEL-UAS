@extends('layouts.masterAdmin')

@section('title', 'Manage-Article')

@section('content')
<style>
    tr.text-center td{
        vertical-align: middle
    }
</style>
<div class="container">
    <a href="/recipeAll/cetak_pdf" class="btn btn-success"target="_blank">CETAK PDF <i class="fas fa-file-pdf"></i> </a>
    <p class=" font-weight-bold" style="font-size: 50px;">Table All Recipe</p>
    <table class="table table-bordered table-striped">
        <thead>
            <tr class=" text-center">
                <th>No</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Image</th>
                <th><i class="fas fa-edit"></i></th>
            </tr>
        </thead>
        <tbody>
            @foreach($recipe as $a)
            <tr class=" text-center">
                    <td>{{$a->id}}</td>
                    <td>{{$a->title}}</td>
                    <td style="text-align: justify;">{{$a->content}}</td>
                    <td><img height="99px" width="150px" src="{{asset('/storage/'.$a->featured_image)}}" style="object-fit: cover"></td>
                    <td >
                        <a href="recipeAll/delete/{{ $a->id }}" class="badge badge-danger">Hapus</a>
                        <a href="recipeAll/edit/{{ $a->id }}" class="badge badge-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> 
    <a href="recipeAll/add" class="btn btn-primary mb-5">Tambah Data</a>  
</div>
@endsection