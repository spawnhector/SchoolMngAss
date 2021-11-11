<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function home(){
        return view('layout.admin.dashboard.body');
    }
}
