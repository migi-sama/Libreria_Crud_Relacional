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

        $genero = new Genero();
        $genero->nombre = "Terror";
        $genero->descripcion = "Da miedo, buuu";
        $genero->save();

        $genero = new Genero();
        $genero->nombre = "Romance";
        $genero->descripcion = "Te enamora, aww";
        $genero->save();

        $genero = new Genero();
        $genero->nombre = "Comedia";
        $genero->descripcion = "Te saca risas, jajas";
        $genero->save();

        $genero = new Genero();
        $genero->nombre = "Psicológico";
        $genero->descripcion = "Te pone a pensar, mmmmm";
        $genero->save();

        $genero = new Genero();
        $genero->nombre = "Ficción gótica";
        $genero->descripcion = "Vainas falsas, y tétricas.";
        $genero->save();


        $libro = new Libro();
        $libro->titulo = "La divina comedia";
        $libro->autor = "Dante";
        $libro->sinopsis = "No da risa :c";
        $libro->fecha = Carbon::now();
        $libro->genero_id = 1;
        $libro->save();
        
        $libro = new Libro();
        $libro->titulo = "Ensayo sobre la ceguera";
        $libro->autor = "José Saramago";
        $libro->sinopsis = "Una ceguera blanca se esparce peor que el socialismo.";
        $libro->fecha = Carbon::now();
        $libro->genero_id = 4;
        $libro->save();

        $libro = new Libro();
        $libro->titulo = "Bajo la misma estrella";
        $libro->autor = "John Green";
        $libro->sinopsis = "Tipa con cáncer se enamora de tipo con cáncer, y ambos son tauro, inconpatibles.";
        $libro->fecha = Carbon::now();
        $libro->genero_id = 2;
        $libro->save();

        $libro = new Libro();
        $libro->titulo = "El retrato de Dorian Gray";
        $libro->autor = "Oscar Wilde";
        $libro->sinopsis = "El (falso) secreto de la inmortalidad";
        $libro->fecha = Carbon::now();
        $libro->genero_id = 5;
        $libro->save();

        $libro = new Libro();
        $libro->titulo = "Manifiesto del Partido Comunista";
        $libro->autor = "Karl Marx";
        $libro->sinopsis = "Utopia del mundo";
        $libro->fecha = Carbon::now();
        $libro->genero_id = 3;
        $libro->save();

    }
}
