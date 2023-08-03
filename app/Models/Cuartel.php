<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuartel extends Model
{
    public function image(){
        
        return $this->morphToOne('App\Models\Image','imageable');
    }
}
