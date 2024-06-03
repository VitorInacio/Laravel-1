<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class BattleController extends Controller
{
    public function index()
    {
        return view('battle.index');
    }

    public function search(Request $request)
    {
        // ------ > strlolower converte para letra minuscula
        $pokemon1 = strtolower($request->input('pokemon1'));
        $pokemon2 = strtolower($request->input('pokemon2'));

        $response1 = Http::get("https://pokeapi.co/api/v2/pokemon/{$pokemon1}");
        $response2 = Http::get("https://pokeapi.co/api/v2/pokemon/{$pokemon2}");

        if ($response1->successful() && $response2->successful()) {

            $attack1 = $response1->json()['stats'][1]['base_stat'];
            $attack2 = $response2->json()['stats'][1]['base_stat'];

            if ($attack1 > $attack2) {
                $winner = $pokemon1;
            } elseif ($attack1 < $attack2) {
                $winner = $pokemon2;
            } else {
                $winner = 'Empate';
            }

            return view('battle.index', [
                'winner' => $winner,
                'pokemon1' => $pokemon1,
                'pokemon2' => $pokemon2,
                'attack1' => $attack1,
                'attack2' => $attack2,
            ]);
        }

        return redirect()->back()->with('error', 'Erro ao buscar informações dos Pokémons.');
    }
}
