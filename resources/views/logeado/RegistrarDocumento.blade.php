@extends('layouts.base')

@section('content')
<link href="{{ asset('css/formoid-solid-green.css') }}" rel="stylesheet">
<script type="text/javascript" src="{{ asset('js/formoid-solid-green.js') }}"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form enctype="multipart/form-data" class="formoid-solid-green" style="background-color:#ffffff;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#000000;max-width:480px;min-width:150px;margin-top: 10px;" method="post">
                <div class="title">
                    <h2>Registrar Documento</h2>
                </div>
                <div class="element-input">
                    <label class="title"></label>
                    <div class="item-cont">
                        <input class="large" type="text" name="input" placeholder="Código"/>
                        <span class="icon-place"></span>
                    </div>
                </div>
                <div class="element-select">
                    <label class="title"></label>
                    <div class="item-cont">
                        <div class="large">
                            <span>
                                <select name="select" >

                                    <option value="Resolución Rectoral">Resolución Rectoral</option>
                                    <option value="Reporte de Matrícula">Reporte de Matrícula</option>
                                    <option value="Constancia">Constancia</option>
                                    <option value="Otros">Otros</option>
                                </select>
                                <i></i>
                                <span class="icon-place"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="element-input">
                    <label class="title"></label>
                    <div class="item-cont">
                        <input class="large" type="text" name="input1" placeholder="Nombre"/>
                        <span class="icon-place"></span>
                    </div>
                </div>
                <div class="element-input">
                    <label class="title"></label>
                    <div class="item-cont">
                        <input class="large" type="text" name="input2" placeholder="Código de Alumno"/>
                        <span class="icon-place"></span>
                    </div>
                </div>
                <div class="element-file">
                    <label class="title"></label>
                    <div class="item-cont">
                        <label class="large" >
                            <div class="button">Adjuntar</div>
                            <input type="file" class="file_input" name="file" />
                            <div class="file_text">No seleccionado</div>
                            <span class="icon-place"></span>
                        </label>
                    </div>
                </div>
                <div class="submit">
                    <input type="submit" value="Registrar Documento"/>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
