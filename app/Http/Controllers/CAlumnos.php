<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno as Alumno; 
use App\GradoAcademico as GradoAcademico; 
use App\TipoDocumento as TipoDocumento;
use Redirect;

class CAlumnos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function mostrarAlumnos(){
        $alumnos = Alumno::all();
        return view('alumnos.mostrar',["alumnos"=>$alumnos]);
    }
    public function crearAlumno(){
        return view('alumnos.crear');
    }
    public function creandoAlumno(Request $request)
    {
        $bandera=true;
        if($request->nombres==null || $request->apePaterno==null || $request->apeMaterno==null || $request->correo==null){
            $bandera=false;
        }
        if($bandera){
            //Falta validar si es un correo con .com o .pe etc
            Alumno::create([
                'nombres' => $request->nombres,
                'apePaterno' => $request->apePaterno,
                'apeMaterno' => $request->apeMaterno,
                'correo' => $request->correo,
                'imgUrl'=> $request->urlImg
            ]);
            return redirect("admin/alumnos");
            return "true";
        }
        return "ERROR AL CREAR";
    }
    public function eliminarAlumno(Request $request)
    {
        $alumno = Alumno::find($request->id);
        $alumno->delete();
        return redirect("admin/alumnos");
    }
    public function editarAlumno($id)
    {
        $alumno = Alumno::find($id);
        return view('alumnos.editar',["alumno"=>$alumno]);
    }
    public function visualizarAlumno($id)
    {
        $alumno = Alumno::find($id);
        $gradosAcademicos = GradoAcademico::all();
        $matriz=null;
        foreach($gradosAcademicos as $gradoAcademico){
            $matriz[$gradoAcademico->id]=array();
        }
        foreach($alumno->documentos as $documento){
            foreach($gradosAcademicos as $gradoAcademico){
                if($documento->tipoDocumento->idGradoAcademico == $gradoAcademico->id){
                    $matriz[$gradoAcademico->id][count($matriz[$gradoAcademico->id])]=$documento;
                    break;
                }
            }
        }
        return view('alumnos.visualizar',["alumno"=>$alumno,"gradosAcademicos"=>$gradosAcademicos,"matriz"=>$matriz]);
    }
    public function editandoAlumno(Request $request)
    {
        $bandera=true;
        if($request->nombres==null || $request->apePaterno==null || $request->apeMaterno==null || $request->correo==null){
            $bandera=false;
        }
        if($bandera){
            //Falta validar si es un correo con .com o .pe etc
            $alumno = Alumno::find($request->id);
            $alumno->nombres=$request->nombres;
            $alumno->apePaterno=$request->apePaterno;
            $alumno->apeMaterno=$request->apeMaterno;
            $alumno->correo=$request->correo;
            $alumno->save();
            return redirect("admin/alumnos");
            return "true";
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
