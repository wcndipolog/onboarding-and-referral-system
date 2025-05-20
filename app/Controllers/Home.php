<?php

namespace App\Controllers;

class Home extends BaseController
{

    public function index()
    {
        return view('index');
    }

    public function pricing_plan()
    {
        return view('pricing_plan');
    }


    public function authenticate()
    {
        return view('view_worklist/index');
    }

    public function view()
    {
        return view('view_worklist/view');
    }

    public function organization_role()
    {
        return view('organization_role');
    }

    public function practitioner_role()
    {
        return view('practitioner_role');
    }

    public function practitioner_profession()
    {
        return view('practitioner_profession');
    }

    public function verify_credentials()
    {
        return view('verify_credentials');
    }
}
