<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Nutricionista Márcia - Página Inicial</title>
  @vite(['resources/css/home.css'])
</head>

<body>
  <!-- Barra de topo -->
  <div class="header-bar"></div>

  <!-- Círculos decorativos -->
  <div class="circles">
    <div class="circle circle1"></div>
    <div class="circle circle2"></div>
    <div class="circle circle3"></div>
    <div class="circle circle4"></div>
    <div class="circle circle5"></div>
    <div class="circle circle6"></div>
  </div>

  <!-- Conteúdo principal -->
  <div class="container">
    <h1>Bem-vinda, Márcia!</h1>
    <div style="margin-top: 30px;">
      <button class="button">
        <a href="{{ route('pacientes.form') }}">Cadastrar Novo Paciente</a>
      </button>

      <button class="button">
        <a href="{{ route('pacientes.lista') }}">Ver Lista de Pacientes</a>
      </button>
    </div>

    <hr style="margin: 40px 0; width: 80%; border: none; border-top: 1px solid #ccc;">

    <section style="text-align: left; max-width: 700px;">
      <h2 style="color: #00B1A0;">📌 O que é IMC?</h2>
      <p style="font-size: 16px;">
        O Índice de Massa Corporal (IMC) é uma medida internacional usada para calcular se uma pessoa está no peso ideal.
        Ele é calculado dividindo o peso (em kg) pela altura ao quadrado (em metros).
      </p>

      <ul style="margin-top: 15px; padding-left: 20px;">
        <li><strong>Abaixo de 18.5:</strong> Abaixo do peso</li>
        <li><strong>18.5 a 24.9:</strong> Peso normal</li>
        <li><strong>25.0 a 29.9:</strong> Sobrepeso</li>
        <li><strong>30.0 ou mais:</strong> Obesidade</li>
      </ul>
    </section>
  </div>
</body>

</html>
