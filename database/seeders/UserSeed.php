<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Azer',
                'surname' => 'Azerov',
                'position' => 'Prezidenti'
            ],
            [
                'name' => 'Vusal',
                'surname' => 'Mustafayev',
                'position' => 'IT sobesinin mudiri'
            ],
            [
                'name' => 'Elcin',
                'surname' => 'Hemidov',
                'position' => 'Sisadmin'
            ]
        ]);
    }
}
