<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoDocumento as TipoDocumento;
use App\Documento as Documento;  
use App\Alumno as Alumno;

class CDocumento extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd("estamos en el index");
    }
    public function mostrarDocumentos(){
        dd("estas en mostrarDocumentos");
    }
    public function crearDocumento($id){
        $alumno = Alumno::find($id);
        $tiposDocumentos = TipoDocumento::all();
        return view('documentos.crear',["tiposDocumentos"=>$tiposDocumentos,"alumno"=>$alumno]);
    }

    public function creandoDocumento(Request $request)
    {

        if($request->codigo!=null){
            Documento::create([
                'idTipoDocumento' => $request->tipoDocumento,
                'idAlumno'=> $request->idAlumno,
                'codigo' => $request->codigo,
                'descripcion'=>$request->descripcion,
                'imgUrl'=> $request->urlImg
            ]);
            return redirect("admin/alumnos/visualizar/".$request->idAlumno);
        }
        return "ERROR AL CREAR";
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
