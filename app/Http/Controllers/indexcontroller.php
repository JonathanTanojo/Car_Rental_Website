<?php

namespace App\Http\Controllers;

use App\Models\index;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class indexcontroller extends Controller
{
    //
    public function list(){
        $listkota = index::select('id_kota','kota')->get();

        return view('index',compact('listkota'));
    }
    public function home(Request $req){
        $home = $req->input();
        $req->session()->put('home',$home['kotaawal']);

        print_r(session('home'));
        return redirect('rincian');
    }
}
