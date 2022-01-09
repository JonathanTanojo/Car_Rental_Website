<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class index extends Model
{
    use HasFactory;
    protected $table="nama_kota";

    public $primaryKey = "id_kota";

    public $incrementing = false;

    public $timestamps = false;



}
