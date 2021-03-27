<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listUsers()
    {
        //$user = new User();
        //$user->name = 'Alini';
        // $user->email = 'alini.canedo@gmail.com';
        // $user->password = Hash::make('123');
        // $user->save();
        // echo "<h1>Listagem de Usuario</h1>";
        $user = User::where('id', 1)->first();
        return view('listUser', [
            'user' => $user,
        ]);
    }
}
