<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class signupModel extends Model
{
    use HasFactory;

    protected $table = "peminjam";

    public $primaryKey = "P_ID";

    public $incrementing = false;
    
    public $timestamps = false;
}
