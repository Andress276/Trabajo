<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soldado extends Model
{

    
    public function servicio()
    {
        return $this->belongsToMany('App\Models\Servicio');
    }

    public function image()
    {
        return $this->morphOne('App\Models\Image','imageable');
    }
}