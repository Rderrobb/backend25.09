<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function sobre(): string
    {
        return view('sobre');
    }

    public function rdavi(): string
    {
        return view('rdavi');
    }
}
