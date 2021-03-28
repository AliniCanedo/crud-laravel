<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container pt-5 ">
        <div class="row align-items-center">
            <div class="col-md-12 mb-2">
                <img class="img-fluid d-none d-sm-block" src="https://kombigode.b-cdn.net/wp-content/uploads/2018/09/flmaula-seja-bem-vindo.jpg" alt="Welcome" style="height: 510px">

            </div>
        </div>
        <div class="row">
            <div class="col-md-7 text-center">
                <a href="{{route('users.listAll')}}" class="btn btn-primary d-block"> Começar</a>
            </div>
        </div>
    </div>
</body>

</html>