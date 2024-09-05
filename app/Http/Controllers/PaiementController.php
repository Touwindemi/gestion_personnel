<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contrat;
use App\Models\Paiement;
use Illuminate\Http\Request;

class PaiementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collection = Paiement::latest()->get();
        $contrats = Contrat::latest()->get();
        return view('pages.paiement.liste', compact('collection', 'contrats'));
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
    public function store(Request $request)
    {
        Paiement::create($request->all());

        emotify('success', 'Paiement effectué avec success !');
        return redirect()->route('gestion_paiement.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $finds = Paiement::find($id);
        return view('pages.paiement.detail', compact('finds'));
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
