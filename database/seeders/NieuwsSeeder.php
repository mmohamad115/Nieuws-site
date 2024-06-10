<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NieuwsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nieuws')->insert([
            'titel' => 'Cristiano Ronaldo',
            'beschrijving' => 'Cristiano Ronaldo is the Goat',
            'aanmaakdatum' => '2024-07-06',
            'categorie_id' => '1',
            'user_id' => '1',
        ]);
    }
}
