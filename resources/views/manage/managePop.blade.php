@extends('layouts.masterAdmin')

@section('title', 'Manage-Popular')

@section('content')
<style>
    tr.text-center td{
        vertical-align: middle
        
    }
</style>
<div class="container">
    <a href="/recipePop/cetak_pdf" class="btn btn-success"target="_blank">CETAK PDF <i class="fas fa-file-pdf"></i></a>
    <p class=" font-weight-bold" style="font-size: 50px;">Table Recipe Popular</p>
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
            @foreach($popular as $p)
                <tr class=" text-center">
                    <td>{{$p->id}}</td>
                    <td>{{$p->title}}</td>
                    <td style="text-align: justify;">{{$p->content}}</td>
                    <td><img height="99px" width="150px" src="{{asset('/storage/'.$p->featured_image)}}" style="object-fit: cover"></td>
                    <td>
                        <a href="recipePop/delete/{{ $p->id }}" class="badge badge-danger">Hapus</a>
                        <a href="recipePop/edit/{{ $p->id }}" class="badge badge-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> 
    <a href="recipePop/add" class="btn btn-primary mb-5">Tambah Data</a>
</div>

@endsection