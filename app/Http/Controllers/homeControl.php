<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homeControl extends Controller
{
    function index()
    {
        return view("home");
    }


    function redirectFunct()
    {
        $typeuser=Auth::user()->usertype;

        if($typeuser == '1')
        {
            return view('admin.adminpage');
        }

        if($typeuser == '0')
        {
            return view('user.userpage');
        }


        else
        {
            return view('home');
        }
    }

     






}
