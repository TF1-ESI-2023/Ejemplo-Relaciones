<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
        \App\Models\Tipo::factory(1)->create([
            "nombre" => "Basico"
        ]);
        \App\Models\Tipo::factory(1)->create([
            "nombre" => "Avanzado"
        ]);

        \App\Models\Persona::factory(3)->create([
            "tipo_id" => 1
        ]);

        \App\Models\Persona::factory(4)->create([
            "tipo_id" => 2
        ]);

        \App\Models\Producto::factory(50)->create();

        \App\Models\Compra::factory(50)->create();
    }
}
