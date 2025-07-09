<?php

namespace App\Controllers;

use Lieurcode\Core\Controller;

class HomeController extends Controller
{
    public function index()
    {

        return view('home', ['title' => 'Beranda']);
     {
 	}

}
