<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TipoDocumento as TipoDocumento; 
use App\GradoAcademico as GradoAcademico;
use Redirect;

class CTipoDocumento extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd("Estoy en el index de tipo documento");
    }
    public function mostrarTipoDocumentos(){
        $tipoDocumentos = TipoDocumento::all();
        return view('tipoDocumentos.mostrar',["tipoDocumentos"=>$tipoDocumentos]);
    }
    public function crearTipoDocumento(){
        $gradosAcademicos = GradoAcademico::all();
        return view('tipoDocumentos.crear',["gradosAcademicos"=>$gradosAcademicos]);
    }
    public function creandoTipoDocumento(Request $request)
    {
        if($request->nombre!=null){
            TipoDocumento::create([
                'nombre' => $request->nombre,
                'descripcion' => $request->descripcion,
                'idGradoAcademico' => $request->idGradoAcademico
            ]);
            return redirect("admin/tipoDocumentos");
        }
        return "ERROR AL CREAR";
    }
    public function eliminarTipoDocumento(Request $request)
    {
        $tipoDocumento = TipoDocumento::find($request->id);
        $tipoDocumento->delete();
        return redirect("admin/tipoDocumentos");
    }
    public function editarTipoDocumento($id)
    {
        $tipoDocumento = TipoDocumento::find($id);
        return view('tipoDocumentos.editar',["tipoDocumento"=>$tipoDocumento]);
    }
    public function editandoTipoDocumento(Request $request)
    {
        if($request->nombre!=null){
            $tipoDocumento = TipoDocumento::find($request->id);
            $tipoDocumento->nombre=$request->nombre;
            $tipoDocumento->descripcion=$request->descripcion;
            $tipoDocumento->idGradoAcademico=$request->idGradoAcademico;
            $tipoDocumento->save();
            return redirect("admin/tipoDocumentos");
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
