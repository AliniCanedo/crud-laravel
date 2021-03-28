<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <h1>Cadastro do Usuário</h1>
            </div>
        </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('users.store')}}" method="post">
                    @csrf
                    <label for="name" class="form-label">Nome do usuário:</label>
                    <input type="text" name="name" class="form-control" />

                    <label for="email" class="form-label">Email do usuário:</label>
                    <input type="email" name="email" class="form-control">


                    <label for="password" class="form-label">Senha do usuário:</label>
                    <input type="password" name="password" class="form-control">

                    <input type="submit" value="Cadastrar usuário" class="btn btn-primary mt-4" />
                </form>
            </div>
        </div>
    </div>
</body>

</html>