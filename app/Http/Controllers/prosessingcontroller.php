<?php

namespace App\Http\Controllers;

use App\Models\prosessing;
use Illuminate\Http\Request;

class prosessingcontroller extends Controller
{
    //
    public function list(){
        $carlist = prosessing::query()->paginate(10);

        return view('propayment',[
            "carlist" => $carlist
        ]);
    }
    public function details($id){
        $item = prosessing::query()->find($id);

        return view('propayment',[
            "i" => $item
        ]);
    }
}
