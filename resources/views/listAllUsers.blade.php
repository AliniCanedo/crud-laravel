<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container-fluid">
        <table class="table">
            <thead>
                <tr>
                    <td scope="col">#ID</td>
                    <td scope="col">Nome:</td>
                    <td scope="col">E-mail: </td>
                    <td scope="col">Ações</td>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <th>{{ $user->id}}</th>
                    <th scope="row">{{ $user->name}}</th>
                    <th>{{ $user->email}}</th>
                    <th class="d-flex">
                        <a href="{{route('user', ['user' => $user-> id])}}" class="btn btn-secondary">Ver Usuário <i class="fa fa-eye"></i> </a>
                        <a href="{{route('users.editar', ['user' => $user->id])}}" class="btn btn-warning ml-5"><i style="font-size:24px" class="fa">&#xf044;</i></a>
                        <form action="{{route('users.destroy', ['user' => $user->id])}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="hidden" name="user" value="{{$user->id}}">
                            <button type="submit" value="" class="btn btn-danger ml-5"><i style="font-size:24px" class="fa fa-remove"></i></button>
                        </form>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('users.novo')}}" class="btn btn-primary">Adicionar um novo usuário</a>
            </div>
        </div>
    </div>
</body>

</html>