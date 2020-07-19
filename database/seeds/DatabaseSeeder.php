<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->truncateTablas([

            'rol',
            'permiso'
        ]);

        $this->call(RolSeeder::class);
        $this->call(PermisoSeeder::class);

    }

    protected function truncateTablas(array $tablas)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS =0');

        foreach($tablas as $tabla){

            DB::table($tabla)->truncate();       
        }

        DB::statement('SET FOREIGN_KEY_CHECKS =1');
    }
}