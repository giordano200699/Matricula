<?php

use Illuminate\Database\Seeder;
use App\User as User;

class Administradores extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	"name"=>"administrador",
        	"email"=>"admin@admin.com",
        	"password"=>bcrypt("admin")
        ]);
    }
}
