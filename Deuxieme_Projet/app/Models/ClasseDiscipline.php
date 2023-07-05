<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ClasseDiscipline extends Model
{
    use HasFactory;
    public function verificationClasseDiscipline($idDiscipline,$idClasse,$idType,$idAn)
    {
        return DB::table('classe_disciplines')->where("classe_id",$idClasse)->where("discipline_id",$idDiscipline)->where("evaluation_id",$idType)->where("annee_scolaire_id",$idAn)->get();
    }
}
