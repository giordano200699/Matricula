<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(Administradores::class);
        $this->call(GradosAcademicos::class);
        $this->call(TipoDocumentos::class);

        $this->call(Alumnos::class);
        $this->call(Documentos::class);
    }
}
