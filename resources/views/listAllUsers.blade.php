<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
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
                    <a href="">Ver Usuário</a>
                    <form action="" method="post">
                        <input type="hidden" name="user" value="">
                        <input type="submit" value="Remover" class="btn btn-danger mx-5">
                    </form>
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>