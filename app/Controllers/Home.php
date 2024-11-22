<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function test_user()
    {
        // return view('welcome_message');
        return view('test/test');
    }

    public function menus()
    {
        return view('menu/menu-utama');
        // return view('test/test');
    }
}
