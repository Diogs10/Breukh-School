<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EvaluationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $evaluation = [
            [
                "type_evaluation" => "Examen"
            ],
            [
                "type_evaluation" => 'Concours'
            ],
            [
                "type_evaluation" => 'Devoir'
            ]
        ];

        \App\Models\Evaluation::insert($evaluation);
    }
}
