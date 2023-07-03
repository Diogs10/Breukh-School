<?php

namespace App\Http\Controllers;

use App\Models\AnneeScolaire;
use App\Models\Eleve;
use App\Models\Inscription;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // $request->validate([
        //     'nom' => 'required',
        //     'prenom' => 'required',
        //     'date' => 'nullable',
        //     'dateNaissance' => 'nullable',
        //     'sexe' => 'required',
        //     'profil' => 'required'
        // ]);
        $eleve = new Eleve();
        $eleve->nom = $request->nom;
        $eleve->prenom = $request->prenom;
        $eleve->date_de_naissance = $request->date;
        $eleve->lieu_de_naissance = $request->dateNaissance;
        $eleve->sexe = $request->sexe;
        $eleve->profil = $request->profil;
        $eleve->save();

        $inscription = new Inscription();
        $inscription->classe_id = $request->classe; 
        $inscription->eleve_id = $eleve->id; 
        $inscription->annee_scolaire_id = AnneeScolaire::latest()->first()->id;
        $inscription->date_inscription = now();
        $inscription->save();

        return response()->json([$eleve,$inscription]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
