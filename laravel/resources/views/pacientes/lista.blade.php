<!DOCTYPE html>
<html>
<head>
    <title>Lista de Pacientes</title>
</head>
<body>
    <h1>Pacientes Cadastrados</h1>

    @foreach ($pacientes as $p)
        <div style="margin-bottom: 20px; border-bottom: 1px solid #ccc;">
            <strong>Nome:</strong> {{ $p->nome }}<br>
            <strong>Data de Nascimento:</strong> {{ \Carbon\Carbon::parse($p->data_nascimento)->format('d/m/Y') }}<br>
            <strong>Peso:</strong> {{ $p->peso }} kg<br>
            <strong>Altura:</strong> {{ $p->altura }} m<br>
            <strong>IMC:</strong> {{ number_format($p->peso / ($p->altura * $p->altura), 2) }}
        </div>
    @endforeach

    <br>
    <a href="{{ route('home') }}">Voltar para Início</a>
</body>
</html>
