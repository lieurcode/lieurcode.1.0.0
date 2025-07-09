<?php

namespace Lieurcode\Controllers;

use Lieurcode\Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $this->view('home', ['title' => 'Selamat Datang di LieurCode!']);
    }
}

