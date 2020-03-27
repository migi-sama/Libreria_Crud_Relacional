<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $dates = ['fecha']; // pasar fechas a carbon

    protected $fillable=[
        'titulo',
        'autor',
        'sinopsis',
        'fecha',
        'genero_id',
    ];

    public function genero(){ //$libro->genero->nombre
        return $this->belongsTo(Genero::class); //Pertenece a un Género.
    }
}
