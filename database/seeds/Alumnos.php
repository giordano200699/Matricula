<?php

use Illuminate\Database\Seeder;
use App\Alumno as Alumno;

class Alumnos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alumno::create([
        	"nombres"=>"Mario Felipe",
        	"apePaterno"=>"Casas",
        	"apeMaterno"=>"Vargas",
        	"correo"=>"marioCasas@gmail.com",
        	"imgUrl2"=>"MarioCasas.jpg"
        ]);
        Alumno::create([
        	"nombres"=>"Sabrina Rafaela",
        	"apePaterno"=>"Torres",
        	"apeMaterno"=>"Ugarte",
        	"correo"=>"sabrinaTorres@gmail.com",
        	"imgUrl2"=>"SabrinaTorres.jpg"
        ]);
    }
}
