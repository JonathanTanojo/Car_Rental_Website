<?php

namespace App\Http\Controllers;

use App\Models\listcar;
use Illuminate\Http\Request;

class listcarcontroller extends Controller
{
    //
    public function list(){
        $carlist = listcar::query()->paginate(10);

        return view('listcar',[
            "carlist" => $carlist
        ]);
    }
    public function details($id,Request $request) {
        $item = listcar::query()->find($id);

        return view('rincian',[
            "i" => $item,
        ]);
    }
}
