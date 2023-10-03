<?php

namespace app\Controllers;

use App\DB;
use App\Models\Article;
use App\Models\User;

class UserController {

    public function index() {
        $users = User::all();
        view('users/index', compact('users'));
    }

    public function edit() {
        $id = $_GET['id'];
        $user = User::find($id);
        view('users/edit', compact('user') );
    }

    public function update() {
        $id = $_GET['id'];
        $user = User::find($id);
        $user -> email = $_POST['email'];
        $user -> password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $user->save();
        header('Location: /admin/users');
    }

    public function show() {
        $id = $_GET['id'];
        $user = User::find($id);
        view('users/view', compact('user'));
    }

    public function newUser() {
        $user = new User();
        $user -> email = $_POST['email'];
        $user -> password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $user -> save();
        header('Location: /admin/users');
    }

    public function newUserForm() {
        view('/users/create');
    }

    public function delete() {
        $id = $_GET['id'];
        $user = User::find($id);
        $user->delete();
        header('Location: /admin/users');
    }
}