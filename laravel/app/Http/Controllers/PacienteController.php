<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function form()
    {
        return view('pacientes.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'peso' => 'required|numeric',
            'altura' => 'required|numeric',
            'data_nascimento' => 'required|date',
        ]);

        Paciente::create($request->all());

        return redirect()->route('pacientes.lista');
    }

    public function lista()
    {
        $pacientes = Paciente::all();
        return view('pacientes.lista', compact('pacientes'));
    }
}
