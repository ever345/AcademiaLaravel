<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docent = Docente::all();
        return view('docentes.index' , compact('docent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $docent = new Docente();
        $docent -> nombre = $request -> input('nombre');
        $docent -> tituloUniversitario = $request -> input('tituloUniversitario');
        $docent -> edad = $request -> input('edad');
        if($request -> hasFile('fotoPerfil')){
            $docent -> fotoPerfil = $request -> file('fotoPerfil')-> store('public/docentes');
        }
//le digo que guarde la informacion
        $docent -> save();
        $tabla = 'Docente';
        $estado = 'Creado';

        return view('mensageExitoso', compact('docent','tabla','estado'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $docent = Docente::find($id);
        return view('docentes.show', compact('docent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docent = Docente::where('id',$id)->firstOrFail();

        return view('docentes.edit', compact('docent'));
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
        $docent = Docente::find($id);
        $docent->fill($request->except('fotoPerfil'));
        if($request->hasFile('fotoPerfil')){
            $docent->fotoPerfil = $request->file('fotoPerfil')->store('public/docentes');
        }
        $docent->save();

        $docent = Docente::where('id',$id)->firstOrFail();
        $tabla = 'Docente';
        $estado = 'Actualizado';


        return view('mensageExitoso', compact('docent','tabla','estado'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $docent = Docente::find($id);
        $urlImagenBD = $docent->imagen;
        $nombreImagen = str_replace('public/','\storage\\',$urlImagenBD);
        $rutaCompleta = public_path().$nombreImagen;
        unlink($rutaCompleta);
        $docent->delete();
        $tabla = 'Docente';
        $estado = 'Eliminado';
        return view('mensageExitoso', compact('cursito','tabla','estado'));
    }
}
