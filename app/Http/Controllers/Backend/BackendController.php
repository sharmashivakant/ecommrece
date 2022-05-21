<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    
    // public function index(){
    //     return "hello";
        
    //     return redirect()->route('dashboard');
    // }

    public function dashboard(){
        //
        return view('pages.backend.dashboard');
    }

    public function signin()
    {
        
        return view('pages.auth.login');
    }


}
