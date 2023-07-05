<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DisciplineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $discipline = [
            [
                "libelle_discipline" => "Mathématiques",
                "code" => "MAT"
            ],
            [
                "libelle_discipline" => 'Francais',
                "code" => "FRA"
            ],
            [
                "libelle_discipline" => 'Anglais',
                "code" => "ANG"
            ]
        ];

        \App\Models\Discipline::insert($discipline);
    }
}
