  
<!DOCTYPE html>
<html>
<head>
<title>Laporan Artikel Recipe</title>
</head>
<body>
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
<center>
<h2>Laporan Artikel Recipe</h2>
</center>
<table class='table table-bordered'>
<thead>
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Deskripsi</th>
        <th>Image</th>
    </tr>
</thead>
<tbody>
@php $i=1 @endphp
@foreach($recipe as $a)
    <tr>
    <td style="text-align: justify;">{{ $i++ }}</td>
    <td style="text-align: justify;">{{$a->title}}</td>
    <td style="text-align: justify;">{{$a->content}}</td>
    <td><img height="99px" width="150px" src="{{public_path('storage/'.$a->featured_image)}}" style="object-fit: cover"></td>
    </tr>
@endforeach
</tbody>
</table>
</body>
</html>