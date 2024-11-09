<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{

    public function store(Request $request)
    {
        ClientController::create($request->all());
        return redirect('pokemons')->with('success', 'Pokemon criado com sucesso');
    }
    public function create()
    {
        return view('clients.create');
    }

    
}
