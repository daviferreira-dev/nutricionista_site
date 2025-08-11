<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HelthMath</title>
    @vite(['resources/css/form.css'])
</head>
<body>
    <div class="circles">
        <div class="circle circle1"></div>
        <div class="circle circle2"></div>
        <div class="circle circle3"></div>
        <div class="circle circle4"></div>
        <div class="circle circle5"></div>
        <div class="circle circle6"></div>
      </div>
    
      <div class="container">
        <header></header>
    
        <main>
          <h1>Cadastre-se</h1>
          <form method="POST" action="{{ route('pacientes.store') }}">
            @csrf
            <label>Nome:</label>
            <input type="text" name="nome" required>
            <label>Peso (kg):</label>
            <input type="number" step="0.01" name="peso" required>
            <label>Altura (m):</label>
            <input type="number" step="0.01" name="altura" required>
            <label>Data de Nascimento:</label>
            <input type="date" name="data_nascimento" required>
            <button type="submit">Salvar</button>
        </form>
        <a href="{{ route('home') }}">Voltar para Início</a>
    
          
        </main>
    
        <footer></footer>
      </div>
    
      <script src="script.js"></script>
    </body>
    </html>
    
</body>
</html>