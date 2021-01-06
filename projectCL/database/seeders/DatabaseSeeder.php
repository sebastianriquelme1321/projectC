<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'EsAdmin' => true,
        ]);

        DB::table('condominios')->insert([
            'Region' => 'Región del Biobío',
            'Ciudad' => 'Concepción',
            'Calle' =>  'Collao',
            'Numero' => '1585',
        ]);

        DB::table('propietarios')->insert([
            'Rut_prop' => '12.345.678-9',
            'Nombre' => 'Admin No Borrar',
            'Fono' =>  '912345678',
            'id' => '1',           
        ]);
    }
}
