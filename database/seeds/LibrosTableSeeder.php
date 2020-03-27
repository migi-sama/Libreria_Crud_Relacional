<?php

use Illuminate\Database\Seeder;
use App\Libro;
use Carbon\Carbon;
use App\Genero;

class LibrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Genero::truncate(); // Evita duplicar datos

        $genero = new Genero();
        $genero->nombre = "Género 1";
        $genero->descripcion = "Descripción 1";
        $genero->save();

        $genero = new Genero();
        $genero->nombre = "Género 2";
        $genero->descripcion = "Descripción 2";
        $genero->save();

        //Libro::truncate(); // Evita duplicar datos

        $libro = new Libro();
        $libro->titulo = "Mi primer libro";
        $libro->autor = "Extracto de mi primer libro";
        $libro->sinopsis = "<p>Resumen de mi primer libro</p>";
        $libro->fecha = Carbon::now();
        $libro->genero_id = 1;
        $libro->save();
        
        $libro = new Libro();
        $libro->titulo = "Mi segundo libro";
        $libro->autor = "Extracto de mi segundo libro";
        $libro->sinopsis = "<p>Resumen de mi segundo libro</p>";
        $libro->fecha = Carbon::now();
        $libro->genero_id = 2;
        $libro->save();

        $libro = new Libro();
        $libro->titulo = "Mi tercer libro";
        $libro->autor = "Extracto de mi tercer libro";
        $libro->sinopsis = "<p>Resumen de mi tercer libro</p>";
        $libro->fecha = Carbon::now();
        $libro->genero_id = 1;
        $libro->save();
    }
}
