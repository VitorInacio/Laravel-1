<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ViacepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cepInfo = null;
        if ($request->has('cep')) {
            $cep = $request->input('cep');
            $cepInfo = Http::get('https://viacep.com.br/ws/{$cep}/json')->json();
        }

        return view(
            'viacep.index', ['cepInfo' => $cepInfo]
        );

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $cep = $request->input('cep');
        $cepdata = Http::get('viacep.com.br/ws/{$cep}/json/')->json();
        return view(
            'viacep.show', [
                'cep' => $cepdata
            ]
        );
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
