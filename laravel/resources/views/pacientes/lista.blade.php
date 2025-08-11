<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <title>Lista de Pacientes</title>
  @vite(['resources/css/lista.css'])
  <style>
    .btn-editar {
      background-color: #00e6d1;
      color: white;
      padding: 6px 12px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 14px;
      margin-top: 8px;
      transition: background-color 0.3s ease;
      display: inline-block;
      text-decoration: none;
    }
    .btn-editar:hover {
      background-color: #00c2b1;
    }
    .paciente-card {
      margin-bottom: 20px;
      padding: 15px;
      border: 1px solid #ddd;
      border-radius: 10px;
      background: #f9f9f9;
      box-shadow: 0 2px 5px rgb(0 0 0 / 0.05);
    }
  </style>
</head>
<body>

  <div class="header-bar"></div>

  <div class="circles">
    <div class="circle1 circle"></div>
    <div class="circle2 circle"></div>
    <div class="circle3 circle"></div>
    <div class="circle4 circle"></div>
    <div class="circle5 circle"></div>
    <div class="circle6 circle"></div>
  </div>

  <div class="container">
    <h1>Pacientes Cadastrados</h1>

    @foreach ($pacientes as $p)
      <div class="paciente-card">
        <div class="paciente-info"><strong>Nome:</strong> {{ $p->nome }}</div>
        <div class="paciente-info"><strong>Data de Nascimento:</strong> {{ \Carbon\Carbon::parse($p->data_nascimento)->format('d/m/Y') }}</div>
        <div class="paciente-info"><strong>Peso:</strong> {{ $p->peso }} kg</div>
        <div class="paciente-info"><strong>Altura:</strong> {{ $p->altura }} m</div>
        <div class="paciente-info"><strong>IMC:</strong> {{ number_format($p->peso / ($p->altura * $p->altura), 2) }}</div>

      </div>
    @endforeach

    <a href="{{ route('home') }}" class="voltar-link">Voltar para Início</a>
  </div>

</body>
</html>
