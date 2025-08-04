<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Pacientes</title>
</head>
<body>
    <h1>Cadastro de Pacientes</h1>

    <form method="POST" action="{{ route('pacientes.store') }}">
        @csrf
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Peso (kg):</label><br>
        <input type="number" step="0.01" name="peso" required><br><br>

        <label>Altura (m):</label><br>
        <input type="number" step="0.01" name="altura" required><br><br>

        <label>Data de Nascimento:</label><br>
        <input type="date" name="data_nascimento" required><br><br>

        <button type="submit">Salvar</button>
    </form>

    <br>
    <a href="{{ route('home') }}">Voltar para Início</a>
</body>
</html>
