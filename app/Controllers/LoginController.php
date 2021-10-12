<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LoginController extends BaseController
{
    public function login()
    {
        return view('admin/login');
    }
    public function register()
    {
        return view('admin/register');
    }
}
