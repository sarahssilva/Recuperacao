<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintexe PHP</title>
</head>
<body>Exercício 1: Calculadora Simples
Criar um script que receba dois números e uma operação (soma, subtração, multiplicação, divisão) e exiba o resultado da operação.
Crie três variáveis: $numero1, $numero2, e $operacao.
Atribua valores aos dois números e defina a operação como uma string ("soma", "subtração", "multiplicação", "divisão").
Use uma estrutura condicional if-else para realizar a operação escolhida e exibir o resultado.

    <h2>Exercício 1: Calculadora Simples</h2>
    <?php
        $numero1 = 6;
        $numero2 = 28;
        $operacao = soma:
        if ($operação = $numero1 + $numero2);{
            echo "A soma é $operacao";
        }else if ($operação = $numero1 + $numero2)

    <h2>Exercício 2: Calculadora de Idade</h2>
    <?php
        $anoNascimento = 2006;
        $anoAtual = 2024;
        $idade;
        $idade = $anoAtual - $anoNascimento;
            echo "A idade é $idade";
    ?>

    <h2>Exercício 3: Conversor de Temperatura</h2>
    <?php
        $temperaturaCelsius = 35;
        $temperaturaFahrenheit;
        $temperaturaFahrenheit = ($temperaturaCelsius * 9/5) + 32;
        echo "A temperatura em Fahrenheit é $temperaturaFahrenheit";
    ?>

    <h2>Exercício 4: Verificação de Paridade</h2>
    <?php
        $numero = 2;
        if($numero % 2 == 0){
            echo "O número é par";
        }else{
            echo "O número é ímpar";
        }
    ?>

    <h2>Exercício 5: Verificação de Faixa Etária</h2>
    <?php
        $idade = 18;
        if($idade >= 0 || $idade <= 12){
            echo "Criança";
        }
        else if($idade >= 13 || $idade <=17){
            echo "Adolescente";
        }
        else if($idade >= 18 || $idade <=64){
            echo "Adulto";
        }
        else if ($idade >= 25 || $idade <=200)
        {
            echo "Idoso";
        }
    ?>

        <h2>Exercício 6: Verificação de Número Positivo, Negativo ou Zero</h2>
    <?php
        $numero = -9;
        if($numero > 0){
            echo "Positivo";
        }else if($numero < 0){
            echo "Negativo";
        }else if( $numero == 0){
            echo "Zero";
        }
    ?>
 
</body>
</html>