<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreNiveauRequest;
use App\Http\Requests\UpdateNiveauRequest;
use App\Http\Resources\NiveauResource;
use App\Models\Classe;
use App\Models\Niveau;
use App\Traits\JoinQueryParams;
use GuzzleHttp\Psr7\Request;

class NiveauController extends Controller
{
    use JoinQueryParams;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Request()->query('join');
        if ($data == NULL) {
            return Niveau::all();
        }
        else {
            $results = Niveau::all();
            return NiveauResource::collection($results);
        }
        //
        // return Niveau::with('classes')->get();
    }

    public function find(Niveau $id){
        // $this->test();
        // return Niveau::find($id)->classes;
        return $id->load('Classes');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(StoreNiveauRequest $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     */
    public function show(Niveau $niveau)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Niveau $niveau)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNiveauRequest $request, Niveau $niveau)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Niveau $niveau)
    {
        //
    }
}
