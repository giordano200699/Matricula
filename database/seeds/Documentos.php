<?php

use Illuminate\Database\Seeder;
use App\Documento as Documento;

class Documentos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Documento::create([
        	'codigo'=>"CI-102",
        	'descripcion'=>"Constancia de Ingreso para el alumno Mario.",
        	'idAlumno'=>1,
        	'idTipoDocumento'=>1,
        	'imgUrl2'=>'CIMario.jpg'
        ]);
        Documento::create([
            'codigo'=>"RM-77",
            'descripcion'=>"Reporte de Matricula para el alumno Mario para el ciclo IV.",
            'idAlumno'=>1,
            'idTipoDocumento'=>2,
            'imgUrl2'=>'RMMario.PNG'
        ]);


        Documento::create([
            'codigo'=>"DB-249",
            'descripcion'=>"Diploma de bachiller para la alumna Sabrina.",
            'idAlumno'=>2,
            'idTipoDocumento'=>4,
            'imgUrl2'=>'DBSabrina.jpg'
        ]);

         Documento::create([
            'codigo'=>"CVF-58",
            'descripcion'=>"Constancia de Verificación de Firmas para la alumna Sabrina.",
            'idAlumno'=>2,
            'idTipoDocumento'=>5,
            'imgUrl2'=>'CVFSabrina.jpg'
        ]);

          Documento::create([
            'codigo'=>"CI-65",
            'descripcion'=>"Constancia de Ingreso Pregrado para la alumna Sabrina.",
            'idAlumno'=>2,
            'idTipoDocumento'=>1,
            'imgUrl2'=>'CISabrina.jpg'
        ]);
          Documento::create([
            'codigo'=>"RR-203",
            'descripcion'=>"Resolución Rectoral Pregrado para la alumna Sabrina.",
            'idAlumno'=>2,
            'idTipoDocumento'=>3,
            'imgUrl2'=>'RRSabrina.jpg'
        ]);
          Documento::create([
            'codigo'=>"RM-19",
            'descripcion'=>"Reporte de Matrícula para la alumna Sabrina del ciclo académico VI.",
            'idAlumno'=>2,
            'idTipoDocumento'=>2,
            'imgUrl2'=>'RMSabrina.png'
        ]);
    }
}
