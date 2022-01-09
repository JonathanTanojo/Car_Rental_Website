<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    protected $table = "kendaraan";

    public $primaryKey = "K_ID";

    public $incrementing = false;

    public $timestamps = false;
}
