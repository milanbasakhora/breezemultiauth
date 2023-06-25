<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        // Logic for the controller's action
        if(Auth::user()->usertype=='0')
        {
            return view('user.home');
        }
        else
        {
            return view('admin.home');
        }
    }
    // public function redirect()
    // {
    //     if(Auth::user()->usertype=='0')
    //     {
    //         return view('user.home');
    //     }
    //     else
    //     {
    //         return view('admin.home');
    //     }
    // }
}
