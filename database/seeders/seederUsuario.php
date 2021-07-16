<?php

namespace Database\Seeders;

use App\Models\insertUser;
use Illuminate\Database\Seeder;

class seederUsuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new insertUser();

        $usuario->userName = "Juan";
        $usuario->password = "123";
        
        $usuario->save();
    }
}
