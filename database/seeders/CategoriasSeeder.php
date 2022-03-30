<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB :: table('categorias')->insert([
            'nombre_categoria' => 'Cerveza',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB :: table('categorias')->insert([
            'nombre_categoria' => 'Tequila',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB :: table('categorias')->insert([
            'nombre_categoria' => 'Whisky',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB :: table('categorias')->insert([
            'nombre_categoria' => 'Vodka',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB :: table('categorias')->insert([
            'nombre_categoria' => 'Vino',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB :: table('categorias')->insert([
            'nombre_categoria' => 'Otra',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
