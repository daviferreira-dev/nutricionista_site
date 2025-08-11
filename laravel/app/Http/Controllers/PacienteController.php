<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    // Página inicial (home)
    public function home()
    {
        return view('home');
    }

    // Formulário de cadastro de paciente
    public function form()
    {
        return view('pacientes.form');
    }

    // Salvar novo paciente no banco
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'peso' => 'required|numeric|min:0',
            'altura' => 'required|numeric|min:0',
            'data_nascimento' => 'required|date',
        ]);

        // Cria novo paciente com apenas os campos permitidos
        Paciente::create($request->only(['nome', 'peso', 'altura', 'data_nascimento']));

        return redirect()->route('pacientes.lista')->with('success', 'Paciente cadastrado com sucesso!');
    }

    // Lista todos os pacientes
    public function lista()
    {
        $pacientes = Paciente::all();
        return view('pacientes.lista', compact('pacientes'));
    }

    // Mostra formulário de edição
    public function edit($id)
    {
        $paciente = Paciente::findOrFail($id);
        return view('pacientes.edit', compact('paciente'));
    }

    // Atualiza paciente
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'peso' => 'required|numeric|min:0',
            'altura' => 'required|numeric|min:0',
            'data_nascimento' => 'required|date',
        ]);

        $paciente = Paciente::findOrFail($id);
        $paciente->update($request->only(['nome', 'peso', 'altura', 'data_nascimento']));

        return redirect()->route('pacientes.lista')->with('success', 'Paciente atualizado com sucesso!');
    }
}
