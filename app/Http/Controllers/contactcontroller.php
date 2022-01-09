<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class contactcontroller extends Controller
{
    //
    function addview(){
        return view("contact");
    }
    function addinput(Request $req){

        $validated = $req->validate([
            'name' => 'required|string',
            'gmail' => 'required|email',
            'subject' => 'required|string',
            'input' => 'required|string'
        ]);

        $input = new contact();
        $input -> P_NAMA = $req->name;
        $input -> P_GMAIL  = $req-> gmail;
        $input -> P_SUBJECT  = $req-> subject;
        $input -> P_INPUT = $req-> input;
        $input->save();
        return view("contact");
    }
    function list()
    {

    }
}
