<?php

namespace App\Controllers;

use App\DB;

class PublicController {
    public function home() {
        $db = new DB();
        $result = $db->all();
        var_dump($result);
        var_dump($result[0]->snippet());
        die();
        $name = 'Sander';
        $num = 10;
        view('home', compact('name', 'num'));
    }
    public function about() {
        view('about');
    }
    public function test() {
        var_dump($_POST);
        var_dump($_SERVER);
        view('form');
    }
    public function testAnswer() {
        var_dump($_POST);
    }
}