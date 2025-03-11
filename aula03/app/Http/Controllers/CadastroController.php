<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cadastro;

class CadastroController extends Controller
{
    public function index()
    {
        $cadastro = Cadastro::all();

        return view('cadastro', compact('cadastro'));
    }

    public function store(Request $request)
    {
        $cadastro = new Cadastro();
            $cadastro -> nome = $request -> txnome;
            $cadastro -> sobrenome = $request -> txsobrenome;
            $cadastro -> save();

        return redirect ('/cadastro');
    }
}
