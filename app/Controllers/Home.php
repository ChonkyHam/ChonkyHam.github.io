<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('pages/home');
    }
    public function about()
    {
        echo view('pages/about');
    }
    public function contact()
    {
        echo view('pages/contact');
    }
    public function login()
    {
        echo view('pages/login');
    }
    
    public function consult()
    {
        return view('pages/consult');
    }
}
