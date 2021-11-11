<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use App\Models\SubjectChoice;
use App\Models\User;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function viewallstudent(){
        return view('layout.admin.pages.view-all-student');
    }

    public function viewstudent($id){
        return view('admin.view-student',[
            'user'=>$id
        ]);
    }

}
