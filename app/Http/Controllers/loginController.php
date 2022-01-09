<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\loginModel;
class LoginController extends Controller
{
    function Login(){
       $user = $this ->loginModel->get_user();

       return view('next',['user'=> $user]);
    }
}
