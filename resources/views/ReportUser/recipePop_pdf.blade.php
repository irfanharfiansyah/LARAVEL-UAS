<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="recipePop">
        <center>
        <h2 class=" text-center">Recipe {{$popular->title}}</h2>     
        </center>
        
        <div class="container"> 
            <div class="titlePop">
                <div class="row">
                    <div class="col-md-7">
                        <center>
                        <img width="450px" src="{{public_path('storage/'.$popular->featured_image)}}">
                        </center>
                        <p class="card-text">{{ $popular->content}}</p>      
                    </div>
                    <div class="col-md-5">
                       
                    </div>
                </div>
            </div>
            <div class="article row">
                @include('layouts.ingreMet')
            </div>
</body>
</html>
 
 