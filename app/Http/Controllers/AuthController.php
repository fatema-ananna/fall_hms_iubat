<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('backend.pages.login.login');
    }
    public function store(Request $req){


        

    }


}