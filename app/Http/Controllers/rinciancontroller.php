<?php

namespace App\Http\Controllers;

use App\Models\rincian;
use Illuminate\Http\Request;

class rinciancontroller extends Controller
{
    //
    function addview(){
        return view("paymentbank");
    }
    function addinput(Request $req){

        $validated = $req->validate([
            'name' => 'required|string',
            'notlp' => 'required|string',
            'gmail' => 'required|email',
            'namadriver' => 'required|string',
            'notlpdriver' => 'required|string'

        ]);

        $input = new rincian();
        $input -> P_NAMA = $req->name;
        $input -> P_NO_TELPON  = $req-> notlp;
        $input -> P_GMAIL  = $req-> gmail;
        $input -> D_NAMA = $req-> namadriver;
        $input -> D_NO_TELPON = $req-> notlpdriver;
        $input->save();
        return view("paymentbank");
    }
    function list()
    {

    }
}
