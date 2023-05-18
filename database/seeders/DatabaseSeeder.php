<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Area;
use App\Models\Cliente;
use App\Models\Empleado;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);




        $area = new Area() ;
        $area->nombre = 'Area Administrativa';
        $area->descripcion = 'Area encargada de todos los movimientos de la empresa' ;
        $area->save();

        $area = new Area() ;
        $area->nombre = 'Area de Finanzas';
        $area->descripcion = 'Area especializada en el flujo de dinero' ;
        $area->save();

        $area = new Area() ;
        $area->nombre = 'Area de Riesgo';
        $area->descripcion = 'Area dedicada al analisis profundo de procesos crediticios con riesgo' ;
        $area->save();

        $area = new Area() ;
        $area->nombre = 'Area Legal';
        $area->descripcion = 'Area Especializada en soluciones de creditos hipotecarios u otros' ;
        $area->save();

        for ($i=5; $i <= 10; $i++) {
            $area = new Area() ;
            $area->nombre = 'Area '.$i;
            $area->descripcion = 'Area '.$i; ;
            $area->save();
        }



        $user = User::create([
            'name' => 'Cristian',
            'ap_paterno' => 'Cuellar',
            'ap_materno' => 'Serrano',
            'ci' => 8235940,
            'fecha_nac' => '1995-1-10',
            'telefono' => 79080640,
            'foto' => 'defecto.jpg',
            'domicilio' =>'Calle Valenacia #451',
            'email' => 'ccuellar77@gmail.com',
            'password' => bcrypt('password')
        ]);

        // Empleado::create([
        //     'id_usuario' => $user->id,
        //     'id_area' => 1,
        // ]);


         \App\Models\User::factory(40)->create();
         $users = User::get();
         foreach ( $users as $u ) {
            if($u->id <= 20){
                Empleado::create([
                    'id_usuario' => $u->id,
                    'id_area' => rand(1, 10),
                ]);
            }else{
                Cliente::create([
                    'id_usuario' => $u->id,
                ]);
            }
         }



    }
}
