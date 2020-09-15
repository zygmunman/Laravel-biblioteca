<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\Rol;

class RolSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rols = [

            'administrador',
            'editor',
            'supervisor'
        ];

        foreach($rols as $key=>$value)
        {

            Rol::create([

                'nombre'=>$value
            ]);

        }

    }
}
