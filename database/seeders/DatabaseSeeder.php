<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@example.com',
            'password' => Hash::make('password'),
            'role' => 'A'
        ]);
        DB::table('devices')->insert([
            'tipo' => 'Laptop',
            'marca' => 'Notebook',
            'modelo' => 'REDSD',
            'potencia_Kw' => 15,
        ]);
        DB::table('devices')->insert([
            'tipo' => 'Lavadora',
            'marca' => 'Samsung',
            'modelo' => 'LX-98',
            'potencia_Kw' => 85,
        ]);
        DB::table('devices')->insert([
            'tipo' => 'TV',
            'marca' => 'LG',
            'modelo' => '32LM',
            'potencia_Kw' => 25,
        ]);
        DB::table('prices')->insert([
            'tarifa_menor' => 101.92,
            'tarifa_mayor' => 225.84,
            'pais' => 'Chile',
            ]);
        DB::table('details')->insert([
            'id_us' => 1,
            'id_de' => 1,
            'id_pr' => 1,
            ]);
    }
}
