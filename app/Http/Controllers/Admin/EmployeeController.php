<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function empHome(){
        return view('admin.empHome');
    }
    
    public function viewEmp(){
        return view('admin.viewEmp');
    }
}
