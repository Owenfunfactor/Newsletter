<?php

namespace App\Http\Controllers;

use App\Http\Requests\AbonnementRequest;
use App\Models\Abonné;
use Illuminate\Http\Request;

class AbonneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $abonne = new Abonné();
        return view('abonnementform',[
            'abonne' => $abonne
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AbonnementRequest $request)
    {
        $abonne = Abonné::create($request->validated());
        return to_route('home')->with('success','Vous avez bien été ajoutez à la Newsletter');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
