<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UprofileController extends Controller
{
    public function visi(){

    }

    public function StrukturOrganisasi(){

    }

    public function TenagaPengajar(){
        return view('users.tenaga_pengajar');
    }
}
