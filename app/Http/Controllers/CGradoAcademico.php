<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GradoAcademico as GradoAcademico; 
use Redirect;

class CGradoAcademico extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd("entro al index");
    }
    public function mostrarGradosAcademicos(){
        $gradosAcademicos = GradoAcademico::all();
        return view('gradosAcademicos.mostrar',["gradosAcademicos"=>$gradosAcademicos]);
    }

    public function crearGradoAcademico(){
        return view('gradosAcademicos.crear');
    }

    public function creandoGradoAcademico(Request $request)
    {
        if($request->nombre!=null){
            GradoAcademico::create([
                'nombre' => $request->nombre,
                'descripcion' => $request->descripcion
            ]);
            return redirect("admin/gradosAcademicos");
        }
        return "ERROR AL CREAR";
    }
    public function eliminarGradoAcademico(Request $request)
    {
        $gradoAcademico = GradoAcademico::find($request->id);
        $gradoAcademico->delete();
        return redirect("admin/gradosAcademicos");
    }
    public function editarGradoAcademico($id)
    {
        $gradoAcademico = GradoAcademico::find($id);
        return view('gradosAcademicos.editar',["gradoAcademico"=>$gradoAcademico]);
    }
    public function editandoGradoAcademico(Request $request)
    {
        if($request->nombre!=null){
            $gradoAcademico = GradoAcademico::find($request->id);
            $gradoAcademico->nombre=$request->nombre;
            $gradoAcademico->descripcion=$request->descripcion;
            $gradoAcademico->save();
            return redirect("admin/gradosAcademicos");
        }
        return "ERROR AL EDITAR";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
