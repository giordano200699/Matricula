<?php

use Illuminate\Database\Seeder;
use App\GradoAcademico as GradoAcademico;

class GradosAcademicos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GradoAcademico::create([
        	"nombre" => "Pregrado",
        	"descripcion" => "Primera formación de Grados de Estudio."
        ]);
        GradoAcademico::create([
        	"nombre" => "Bachiller",
        	"descripcion" => "Primera Título de Grado de Estudio."
        ]);
        GradoAcademico::create([
        	"nombre" => "Maestría",
        	"descripcion" => "Segundo Título de Grado de Estudio."
        ]);
        GradoAcademico::create([
        	"nombre" => "Doctorado",
        	"descripcion" => "Tercero Título de Grado de Estudio."
        ]);

    }
}
