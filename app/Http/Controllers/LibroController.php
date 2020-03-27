<?php

namespace App\Http\Controllers;

use App\Libro;
use App\Genero;

use Redirect;

use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libro::orderBy('id','desc')->paginate(2);
        return view('libro.list', compact('libros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $generos = Genero::all();
        return view('libro.create', compact('generos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'sinopsis' => 'required',
            'fecha' => 'required',
            'genero_id' => 'required',
        ]);
   
        Libro::create($request->all());
    
        return Redirect::to('libro')
       ->with('success','Libro creado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $generos = Genero::all();

        $where = array('id' => $id);
        $data['libro_info'] = Libro::where($where)->first();
 
        return view('libro.edit',compact('generos'), $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'sinopsis' => 'required',
            'fecha' => 'required',
            'genero_id' => 'required',
        ]);
         
        $update = [ 'titulo' => $request->titulo,
                    'autor' => $request->autor,
                    'sinopsis' => $request->sinopsis,
                    'fecha' => $request->fecha,
                    'genero_id' => $request->genero_id,
                ];
        Libro::where('id',$id)->update($update);
   
        return Redirect::to('libro')
       ->with('success','Libro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Libro::where('id',$id)->delete();
        return Redirect::to('libro')->with('success','Libro eliminado satisfactoriamente');
    }
}
