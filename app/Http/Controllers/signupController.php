<?php

namespace App\Http\Controllers;

use App\Models\signupModel;
use Illuminate\Http\Request;

class signupController extends Controller
{
    function addview(){
        return view("signup");
    }
    function addinput(Request $req){

        $validated = $req->validate([
            'gmail' => 'required|email',
            'nama' => 'required|string',
            'password' => 'required|string',
        ]);

        $input = new signupModel();
        $input -> P_GMAIL  = $req-> gmail;
        $input -> P_NAMA = $req->nama;
        $input -> P_PASSWORD  = $req-> password;
        $input->save();
        return view("signup");
    }
}
