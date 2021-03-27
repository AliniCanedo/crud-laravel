<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function listAllUsers() {
        $users = User::all();

        return view('listAllUsers', [
            'users' => $users,
        ]);
    }
    public function listUsers(User $user) {
            return view('listUser', [
                'user' => $user
            ]);
    }

    public function formAddUser(){
        return view('addUser');
    }

    public function storeUser() {
        
    }
}
