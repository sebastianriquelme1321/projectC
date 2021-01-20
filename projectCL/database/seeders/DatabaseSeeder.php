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
            'email' => 'nuevocollao1585@gmail.com',
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

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'demo@demo.com',
            'password' => Hash::make('demo'),
        ]);

        DB::table('propietarios')->insert([
            'Rut_prop' => '99.999.999-9',
            'Nombre' => 'Propietario Demo',
            'Fono' =>  '999999999',
            'id' => '2',           
        ]);

        DB::table('departamentos')->insert([
            'ID_prop' => '2',
            'Numero' => '99999',
            'Bloque' => 'Z',
        ]);

        DB::table('estacionamientos')->insert([
            'ID_prop' => '2',
            'Numero' => '99999',
        ]);
        
        DB::table('jefe_de_hogars')->insert([
            'ID_dept' => '1',
            'Rut_jefe' => '99.999.999-9',
            'Nombre' => 'Demo',
            'Apellido' => 'Demo',
            'Fono' => '999999999',
            'Correo' => 'demo@demo.com',
        ]);

        DB::table('pagos')->insert([
            'ID_dept' => '1',
            'Monto' => '999999',
            'Monto_deuda' => '999999',
            'Fecha_de_pago' => '2021-01-01',
            'Mes_de_pago' => '2021-01-01',
            'Detalle' => 'Pago Demo',
        ]);


    }
}
