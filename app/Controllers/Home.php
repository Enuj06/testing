<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function Enuj06()
    {
        echo 'Hello June';
    }
}
