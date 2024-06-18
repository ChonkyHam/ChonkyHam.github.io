<?php

namespace App\Controllers;

class Index3 extends BaseController
{
    public function about()
    {
        echo view('pages/about1');
    }

    public function home()
    {
        echo view('pages/home');
    }
    public function payment()
    {
        echo view('pages/payment');
    }
}