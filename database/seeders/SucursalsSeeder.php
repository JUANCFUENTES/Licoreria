<?php

namespace Database\Seeders;

use App\Models\Sucursal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SucursalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sucursal::create(['domicilio' => 'Paseo Andares','telefono' =>'1234567890','created_at' => now() , 'updated_at' => now(), ]);
       Sucursal::create(['domicilio' => 'El Briseño', 'telefono' =>'1234567888','created_at' => now() , 'updated_at' => now(),] );
       Sucursal::create(['domicilio' => 'Bugambilias', 'telefono' =>'1234555888','created_at' => now() , 'updated_at' => now(),] );
    }
}
