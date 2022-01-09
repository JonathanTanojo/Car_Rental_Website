<?php

namespace App\Http\Controllers;

use App\Models\cars;
use App\Models\kota;
use Illuminate\Http\Request;

class carsController extends Controller
{
    //

    public function list(){
        $cars = cars::query()->paginate(4);

        $listkota = kota::select('id_kota','kota')->get();

        return view("cars",compact('listkota'),["cars"=> $cars]);
    }
}
