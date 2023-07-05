<?php

namespace App\Http\Controllers;

use App\Models\AnneeScolaire;
use App\Models\ClasseDiscipline;
use App\Models\Discipline;
use App\Models\Evaluation;
use Composer\Autoload\ClassLoader;
use Illuminate\Http\Request;

class DisciplineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Discipline::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'libelle' => 'required|unique:disciplines,libelle_discipline',
            'code' => 'required|unique:disciplines,code'
        ]);
        $discipline = new Discipline();
        $discipline->libelle_discipline = $request->libelle; 
        $discipline->code = $request->code;
        $discipline->save();
        // $classeDiscipline = new ClasseDiscipline();
        // $claDis = $classeDiscipline->verificationClasseDiscipline($discipline->id,$request->classe,$request->evaluation,AnneeScolaire::latest()->first()->id);
        // $classeDiscipline->classe_id = $request->classe; 
        // $classeDiscipline->discipline_id = $discipline->id;
        // $classeDiscipline->annee_scolaire_id = AnneeScolaire::latest()->first()->id;
        // $classeDiscipline->evaluation_id = $request->evaluation;
        // $classeDiscipline->max_note = $request->max;
        // $classeDiscipline->save();

        return response()->json($discipline);
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
