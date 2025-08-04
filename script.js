document.getElementById('imcForm').addEventListener('submit', function(e) {
    e.preventDefault();
  
    const nome = document.getElementById('nome').value;
    const altura = parseFloat(document.getElementById('altura').value);
    const peso = parseFloat(document.getElementById('peso').value);
    const resultado = document.getElementById('resultado');
  
    if (isNaN(altura) || isNaN(peso) || altura <= 0 || peso <= 0) {
      resultado.textContent = 'Por favor, insira valores válidos.';
      return;
    }
  
    const imc = peso / (altura * altura);
    let classificacao = '';
  
    if (imc < 18.5) {
      classificacao = 'abaixo do peso';
    } else if (imc < 24.9) {
      classificacao = 'com peso normal';
    } else if (imc < 29.9) {
      classificacao = 'com sobrepeso';
    } else if (imc < 34.9) {
      classificacao = 'com obesidade grau 1';
    } else if (imc < 39.9) {
      classificacao = 'com obesidade grau 2';
    } else {
      classificacao = 'com obesidade grau 3 (mórbida)';
    }
  
    resultado.textContent = `${nome}, seu IMC é ${imc.toFixed(2)} e você está ${classificacao}.`;
  });
  ;
  
  
