<?php

use Illuminate\Database\Seeder;
use App\Models\Seguridad\Usuario;
class UsuarioAdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = Usuario::create([

            'usuario' => 'admin',
            'nombre' => 'Administrador',
            'email' => 'rgt90@hotmail.com',
            'password' => 'pass123'
            //'password' => Hash::make('pass123')
        ]);

        $usuario->roles()->sync(1);
        
        
    }
}