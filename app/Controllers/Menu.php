<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Menu extends Controller
{
    public function index()
    {
        helper('form');
        return view('menu');
    }
    

    
}
