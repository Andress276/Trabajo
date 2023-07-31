<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soldado extends Model
{
    protected $fillable = ['Cod_s', 'Nom_s', 'Apell_s', 'Grado_s', 'Cod_ce1', 'Num_com1'];

    public function servicios()
    {
        return $this->belongsToMany(Servicio::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}