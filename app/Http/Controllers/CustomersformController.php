<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersformController extends Controller
{
    public function index()
    {
        return view('customers.customersform');
    }

}
