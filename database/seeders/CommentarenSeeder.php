<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentarenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('commentaren')->insert([
            'content' => 'Cristiano Ronaldo Is Better Then Messi',
            'aanmaakdatum' => '2024-07-06',
            'user_id' => '1',
            'nieuws_id' => '1',
        ]);
    }
}
