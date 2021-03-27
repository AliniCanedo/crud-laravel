<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhe do Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1></h1>
        <p></p>
        <p></p>

        <div class="card" style="width: 18rem;">
            <img src="https://w7.pngwing.com/pngs/393/995/png-transparent-aspria-fitness-computer-icons-user-my-account-icon-miscellaneous-monochrome-black.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$user->name}}</h5>
                <p class="card-text">{{$user->email}}</p>
                <p class="card-text">{{ date('d/m/Y H:i', strtotime($user->created_at)) }}</p>
            </div>
        </div>
    </div>
</body>

</html>