<?php

namespace App\Http\Controllers;

use App\Models\payment;
use Illuminate\Http\Request;

class paymentcontroller extends Controller
{
    //
    public function list(){
        $carlist = payment::query()->paginate(10);

        return view('propayment',[
            "carlist" => $carlist
        ]);
    }
    public function detailsatm($id){
        $item = payment::query()->find($id);

        return view('paymentatm',[
            "i" => $item
        ]);
    }
    public function detailsbank($id){
        $item = payment::query()->find($id);

        return view('paymentbank',[
            "i" => $item
        ]);
    }
}
