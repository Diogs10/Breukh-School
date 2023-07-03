<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NiveauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $niveau = [
            [
                "libelle_niveau" => "Primaire"
            ],
            [
                "libelle_niveau" => 'Moyen'
            ],
            [
                "libelle_niveau" => 'Secondaire'
            ]
        ];

        \App\Models\Niveau::insert($niveau);
    }
}
