<?php

use Illuminate\Database\Seeder;
use App\TipoDocumento as TipoDocumento;

class TipoDocumentos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoDocumento::create([
        	"nombre"=>"Constancia de Ingreso",
        	"descripcion"=>"Este documento sustenta el ingreso Pregrado de un alumno.",
        	"idGradoAcademico"=>1
        ]);
        TipoDocumento::create([
        	"nombre"=>"Reporte de Matrícula Pregrado",
        	"descripcion"=>"Este documento sustenta que el alumno esta matrículado en sus cursos correspondientes.",
        	"idGradoAcademico"=>1
        ]);
        TipoDocumento::create([
        	"nombre"=>"Resolución Rectoral Pregrado",
        	"descripcion"=>"Este documento es sustentado por el rectorado.",
        	"idGradoAcademico"=>1
        ]);

        TipoDocumento::create([
        	"nombre"=>"Diploma de Bachiller",
        	"descripcion"=>"Este documento sustenta el Grado Bachiller de un Alumno.",
        	"idGradoAcademico"=>2
        ]);
        TipoDocumento::create([
        	"nombre"=>"Constancia de Verificación de Firmas Bachiller",
        	"descripcion"=>"Este documento muestra las firmas de los que participaron para la sustentación del diploma de Bachiller.",
        	"idGradoAcademico"=>2
        ]);

    }
}
