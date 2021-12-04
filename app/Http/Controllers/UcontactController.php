<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UcontactController extends Controller
{
    public function index(){
        return view('users.contact');
    }
}
