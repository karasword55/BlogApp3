<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>

    </title>
</head>
<body>

<div class="card-deck cardDiv">
    @foreach($blogs as $blogs)
    <div class="card ortala" style="width: 18rem;">

    <img src="{{ URL('anit.jpg') }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{$blogs->header}}</h5>
        <p class="card-text">{{$blogs->content}}</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    
    
    </div>
    @endforeach
</div>


</body>
</html>

<style>
    .cardDiv{
        margin: auto;
        width: 30%;
    }
    .ortala{
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px, rgb(51, 51, 51) 0px 0px 0px 3px;
        margin:40px;
    }
</style>



