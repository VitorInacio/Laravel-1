<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ViacepController extends Controller
{

    public function index(Request $request)
    {
        return view(
            'viacep.index'
        );
    }

    public function search(Request $request)
    {
        // https://viacep.com.br/ws/87504655/json

        $cepInfoJson = null;
        if ($request->has('cep')) {
            $cep = $request->cep;
            $cepInfo = Http::withOptions(['verify' => false])->get('https://viacep.com.br/ws/' . $cep . '/json');
            $cepInfoJson = $cepInfo->json();
        }

        return view(
            'viacep.show', [
                'cepInfo' => $cepInfoJson
            ]
        );
    }

}
