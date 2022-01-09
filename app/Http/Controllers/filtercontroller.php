<?php

namespace App\Http\Controllers;

use App\Models\filter;
use App\Models\listcar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class filtercontroller extends Controller
{
    //
    public function penumpang5(){
        $pnmpng = DB::table('kendaraan')
                        ->select(DB::raw('*'))
                        ->where('K_PENUMPANG','=','5')
                        ->paginate(10);

        // print_r($pnmpng);
        return view('listcar',[
            "carlist"=> $pnmpng
        ]);
    }
    public function penumpang6(){
        $pnmpng5 = DB::table('kendaraan')
                        ->select(DB::raw('*'))
                        ->where('K_PENUMPANG','=','5');
                        
        $pnmpng = DB::table('kendaraan')
                        ->select(DB::raw('*'))
                        ->where('K_PENUMPANG','=','6')
                        ->union($pnmpng5)
                        ->paginate(10);

        // print_r($pnmpng);
        return view('listcar',[
            "carlist"=> $pnmpng
        ]);
    }
    public function penumpang7(){
        $pnmpng = DB::table('kendaraan')
                        ->select(DB::raw('*'))
                        ->where('K_PENUMPANG','>','6')
                        ->paginate(10);

        // print_r($pnmpng);
        return view('listcar',[
            "carlist"=> $pnmpng
        ]);
    }
}
