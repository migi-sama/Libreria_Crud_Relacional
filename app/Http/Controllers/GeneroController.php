<?php

namespace App\Http\Controllers;

use App\Genero;
use Redirect;

use Illuminate\Http\Request;

class GeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generos = Genero::orderBy('id','desc')->paginate(5);
        return view('genero.list', compact('generos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('genero.create');
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
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);
   
        Genero::create($request->all());
    
        return Redirect::to('genero')
       ->with('success','Género creado satisfactoriamente.');

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
        $where = array('id' => $id);
        $data['genero_info'] = Genero::where($where)->first();
 
        return view('genero.edit', $data);

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
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);
         
        $update = ['nombre' => $request->nombre, 'descripcion' => $request->descripcion];
        Genero::where('id',$id)->update($update);
   
        return Redirect::to('genero')
       ->with('success','Género actualizado satisfactoriamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*$status = Genero::where('id',$id)->delete();

        if($status==true){
            return Redirect::to('genero')->echo("<script>alert('El género fue eliminado correctamente.');</script>");
        }

        else if ($status == false) {
            return Redirect::to('genero')->echo("<script>alert('Error al aliminar. Género en uso.');</script>");
        }
        */
       
        try {
            //Eliminar registro
            Genero::where('id',$id)->delete();
            return Redirect::to('genero')->with('success','Género eliminado satisfactoriamente');
        } 
        catch (\Exception $e) {
            return Redirect::to('genero')->withSuccess('No puede ser eliminado, está siendo usado.');
        }
        

    }
}
