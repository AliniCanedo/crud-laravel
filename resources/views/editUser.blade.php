<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
<div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <h1>Editar Usuário</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-12">
                <form action="{{route('users.edit', ['user' => $user-> id])}}" method="post">
                    @csrf
                    @method('patch')
                    <label for="name" class="form-label">Nome do usuário:</label>
                    <input type="text" name="name" value="{{$user->name}}" class="form-control">

                    <label for="email" class="form-label">Email do usuário:</label>
                    <input type="text" name="email" value="{{$user->email}}" class="form-control">


                    <label for="password" class="form-label">Senha do usuário:</label>
                    <input type="text" name="password" class="form-control">

                    <input type="submit" value="Editar usuário" class="btn btn-primary mt-4">

                </form>
            </div>
        </div>
    </div>
</body>

</html>