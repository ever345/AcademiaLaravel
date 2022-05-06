<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\storePersonajeRequest;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index()
    {
        /*instanciamos el modelo curso en la varible cursito,
    utilizando un metodo all() que nos trae toda la informacion de la tabla como array*/
        $cursito = Curso::all();

//el metodo compact adjunta la informacion deseado a la vista para usarla en la vista
        return view('cursos.index',compact('cursito'));
    }


    public function create()
    {
        return view('cursos.create');
    }

    public function store(storePersonajeRequest $solicitud)
    {
        /*
        $validacionDatos = $solicitud -> validate([
            'nombre'=>'required|max:10',
            'avatar'=>'required|image'
        ]);*/

        if($solicitud->hasFile('imagen')){
            $archivo = $solicitud->file('imagen');
        }

        $cursito = new Curso();
        $cursito -> nombre = $solicitud -> input('nombre');
        $cursito -> descripcion = $solicitud -> input('descripcion');
/*validamos si biene un archivo del campo x,
luego en el campo imagen almacenamos el del archivo que
se va a guardar en storegare/aa/public e indicamos una subcarpeta para ser mas ordenados*/
        if($solicitud -> hasFile('imagen')){
            $cursito -> imagen = $solicitud -> file('imagen')-> store('public/cursos');
        }
//le digo que guarde la informacion
        $cursito -> save();

        $tabla = 'Curso';
        $estado = 'Creado';
        return view('mensageExitoso', compact('cursito','tabla','estado'));
    }


    public function show($id)
    {
        $cursito = Curso::find($id);
        return view('cursos.show', compact('cursito'));
    }


    public function edit($id)
    {
        $cursito = Curso::where('id',$id)->firstOrFail();

        return view('cursos.edit', compact('cursito'));
    }


    public function update(Request $request, $id)
    {
        $cursito = Curso::find($id);
        //llenar todos los campos del curso con la informacion que viene en la peticion o request
        //esta tecnica solo actualiza los textos y numeros
        //$cursito -> fill($request->all());
        //ahora llenamos todos los campos excepto el campo imagen
        $cursito->fill($request->except('imagen'));
        //return $request;
        //procesamos la imagen de otra manera para su actualizacion
        if($request->hasFile('imagen')){
            $cursito->imagen = $request->file('imagen')->store('public/cursos');
        }
        $cursito->save();

        $cursito = Curso::where('id',$id)->firstOrFail();
        $tabla = 'Curso';
        $estado = 'Actualizado';
        return view('mensageExitoso', compact('cursito','tabla','estado'));
    }

    public function destroy($id)
    {
        $cursito = Curso::find($id);
        $urlImagenBD = $cursito->imagen;
        $nombreImagen = str_replace('public/','\storage\\',$urlImagenBD);
        $rutaCompleta = public_path().$nombreImagen;
        unlink($rutaCompleta);
        $cursito->delete();
        $tabla = 'Curso';
        $estado = 'Eliminado';
        return view('mensageExitoso', compact('cursito','tabla','estado'));
    }

    public function info(){
        return view('varios.nosotros');
    }

}
