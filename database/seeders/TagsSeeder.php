<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tags')->insert([
            'titel' => 'Cristiano Ronaldo',
            'beschrijving' => 'Cristiano Ronaldo is the Goat',
            'aanmaakdatum' => '2024-07-06'
        ]);
    }
}
