@extends('layouts.masterAdmin')

@section('title', 'Manage-User')

@section('content')
<style>
    tr.text-center td{
        vertical-align: middle
    }
</style>
<div class="container">
    <p class=" font-weight-bold" style="font-size: 50px;">Table Comment User</p>
    <table class="table table-bordered table-striped">
        <thead>
            <tr class=" text-center">
                <th>Image</th>
                <th>Nama</th>
                <th>Comment</th>
                <th><i class="fas fa-edit"></i></th>
            </tr>
        </thead>
        <tbody>
            @foreach($comment as $u)
            <tr class=" text-center">
                    <td> <img class=" mr-3"  width="80px" src="{{asset('/storage/'.Auth::user()->image)}}" alt=""></td>
                    <td>{{$u->name}}</td>
                    <td class=" text-danger">{{$u->comment}}</td>
                    <td>
                        <a href="manageCom/delete/{{ $u->id }}" class="badge badge-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> 
</div>
@endsection