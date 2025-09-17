<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'jobi',
            'level' => 100,
            'evolutionPoint' => 100
        ]);

        User::create([
            'name' => 'kimu',
            'level' => 33,
            'evolutionPoint' => 3830
        ]);

        User::create([
            'name' => 'satone',
            'level' => 8,
            'evolutionPoint' => 63
        ]);

        User::factory(100)->create();
    }
}
