<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Curso;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*instanciamos el modelo curso en la varible cursito,
    utilizando un metodo all() que nos trae toda la informacion de la tabla como array*/
        $cursito = Curso::all();

//el metodo compact adjunta la informacion deseado a la vista para usarla en la vista
        return view('cursos.index',compact('cursito'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cursito = new Curso();
        $cursito -> nombre = $request -> input('nombre');
        $cursito -> descripcion = $request -> input('descripcion');
/*validamos si biene un archivo del campo x,
luego en el campo imagen almacenamos el del archivo que
se va a guardar en storegare/aa/public e indicamos una subcarpeta para ser mas ordenados*/
        if($request -> hasFile('imagen')){
            $cursito -> imagen = $request -> file('imagen')-> store('public/cursos');
        }
        $cursito -> save();

        return 'curso creado exitosamente';
    }

    /**
     * almacena un nuevo registro creado.
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
