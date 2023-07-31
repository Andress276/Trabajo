<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $fillable = ['Cod_ser', 'Acti_ser', 'Cod_2'];

    public function soldados()
    {
        return $this->belongsToMany(Soldado::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
