<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Foreach_;

class Eleve extends Model
{
    use HasFactory;
    public function inscription():HasMany
    {
        return $this->HasMany(Inscription::class);
    }
    protected $hidden = [
        'password',
        'remember_token',
        'created_at',
        'updated_at'
    ];

    public function __construct()
    {
        $this->numero = $this->num();
        // $this->numero = 1;
    }

    public function num(){
        // $numm = DB::table('eleves')->where("etat_eleve",0)->orderBy("numero",'asc')->get();
        // $num = DB::table('eleves')->orderBy("numero",'desc')->where("etat_eleve",1)->first();
        // $num = $num->numero + 1;
        // if (count($numm) == 0) {
        //     return $num;
        // }
        // else {
        //     $m= DB::table('eleves')->where("etat_eleve",1)->get();
        //     foreach ($numm as $value) {

        //         $compteur = 0;
        //         foreach ($m as $val) {
        //             if ($value->numero == $val->numero) {
        //                 $compteur++;
        //             }
        //         }
        //         if ($compteur == 0) {
        //             return $num = $value->numero;
        //         }
        //     }
        // }
        // return $num;
        $num = DB::table('eleves')->where("etat_eleve",1)->where("profil",1)->orderBy("numero",'asc')->get();
        if (count($num) == 0) {
            return $i = 1;
        }
        else {
            for ($i = 0; $i < count($num); $i++) { 
                if (($i+1) != ($num[$i]->numero)) {
                    return $i+1;
                }
            }
            return count($num)+1;
        }
    }
}
