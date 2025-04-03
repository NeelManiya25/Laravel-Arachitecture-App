<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesformController extends Controller
{

    public function index()
    {
        return view('employees.employeesform');
    }
}
