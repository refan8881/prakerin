<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kota;

class provinsi extends Model
{
    public function kota(){
        return $this->hasMany('App\Models\kota','id_provinsi');
    }
}
