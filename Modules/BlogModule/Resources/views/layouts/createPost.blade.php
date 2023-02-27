<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div>

<form action="http://127.0.0.1:8000/admin/button_store" method="post">
    {{ csrf_field() }}
    

        <div class="form-group">
            <label> Başlık </label>
            <input type="text" class="form-control" name="header" id="header" placeHolder="başlık giriniz">
        </div>

        <div class="form-group">
            <label> İçerik </label>
            <input type="text" class="form-control" name="content" id="content" placeHolder="içerik giriniz">
        </div>

        

    <button type="submit" name="submit" class="btn btn-primary" style="width: 50%;"> Oluştur </button>
</form>


</div>

    
</body>
</html>