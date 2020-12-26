<!DOCTYPE html>
<html>
<head>
<title>Laporan Artikel Drink</title>
<style>
  table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: center;
}
    </style>
</head>
<body>
<center>
<h2>Laporan Artikel User</h2>
</center>
<table>
    <tr>
        <th>No</th>
        <th>Photo</th>
        <th>Name</th>
        <th>Email</th>
        <th>Roles</th>   
    </tr>
@php $i=1 @endphp
@foreach($user as $a)
<tr>
    <td>{{ $i++ }}</td>
    <td><img width="50px" src="{{public_path('storage/'.$a->image)}}"></td>
    <td>{{$a->name}}</td>
    <td>{{$a->email}}</td>
    <td>{{$a->roles}}</td>    
</tr>
@endforeach
</table>
</body>
</html>
