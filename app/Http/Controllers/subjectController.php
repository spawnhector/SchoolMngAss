<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class subjectController extends Controller
{

    public function viewcourse(){
        return view('layout.admin.pages.view-all-course');
    }
}
