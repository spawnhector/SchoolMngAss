<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teacherController extends Controller
{
    
    public function viewteacher(){
        return view('layout.admin.pages.view-all-teacher');
    }
}
