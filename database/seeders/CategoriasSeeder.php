<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            'nome' => 'Carne',
        ]);

        DB::table('categorias')->insert([
            'nome' => 'Fruta',
        ]);

        DB::table('categorias')->insert([
            'nome' => 'Vegetal',
        ]);
    }
}
