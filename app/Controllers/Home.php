<?php

namespace App\Controllers;

class Home extends BaseController
{
    
    public function index()
    {
        return view('index');
    }


    public function authenticate()
    {
        return view('view_worklist/index');
    }

    public function view()
    {
        return view('view_worklist/view');
    }
}