<?php

namespace App\Http\Controllers;

use App\Models\eticket;
use Illuminate\Http\Request;

class eticketcontroller extends Controller
{
    //
    public function details($id){
        $item = eticket::query()->find($id);

        return view('eticket',[
            "i" => $item
        ]);
    }
}
