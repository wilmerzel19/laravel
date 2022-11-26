<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
       //  \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
            'name' => 'wilmer',
            'email' => 'wilmer@gmail.com',
            'password'=>bcrypt('12345678'),
         ]
        );
         \App\Models\Persona::factory(1000)->create();
         \App\Models\Producto::factory(1000)->create();
         \App\Models\Venta::factory(1000)->create();
}
    }
   

