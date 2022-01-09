<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class loginModel extends Model
{
    function get_user(){
        return DB::table('peminjam')->select(['select * from peminjam where P_NAMA => $']);
    }

}
