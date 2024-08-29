<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintexe PHP</title>
</head>
    <h2>Exercício 1: Calculadora Simples</h2>
    <?php
        $numero1 = 6;
        $numero2 = 28;
        $operacao = soma:
        $resultado = 0; 

        if ($operacao == "soma") {
            $resultado = $numero1 + $numero2;
        } 
        elseif ($operacao == "subtracao") {
            $resultado = $numero1 - $numero2;
        } 
        elseif ($operacao == "multiplicacao") {
            $resultado = $numero1 * $numero2;
        } 
        elseif ($operacao == "divisao") {
            if ($numero2 != 0) { 
                $resultado = $numero1 / $numero2;
            } else {
                echo "<p>Não é possível dividir por zero</p>";
            }
        } else {
            echo "<p>Operação inválida. Use 'soma', 'subtracao', 'multiplicacao' ou 'divisao'.</p>";
        }

        echo "O resultado é $resultado";
        ?>


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

    <h2>Exercício 7: Classificação de Nota Escolar</h2>
    <?php
    $nota  = 97;

    if ($nota <= 60){
        echo "Nota F";
    }else if ($nota >= 60 || $nota <= 70;){
        echo "Nota D";
    }else if ($nota >=70 || $nota <= 79){
        echo "Nota C";
    }else if ($nota >= 80 || $nota <= 89){
        echo "Nota B";
    }else if ($nota >=90 || $nota <= 100){
        echo "Nota A";
    }
    ?>

    <h2>Exercício 8: Verificação de Ano Bissexto</h2>
    <?php
    $ano = 2019;

    if($ano % 4 == 0 && $ano % 100 != 0){
        echo "Correspondente";
    }else if ($ano % 400 == 0){
        echo "Correspondente";
    }else{
        echo "Não correspondente";
    }
    ?>

    <h2>Exercício 9: Verificação de Tamanho de Senha</h2>
    <?php
    $senha(8) = rapariga;
    $caracteres = 8;

    if $senha == $caracteres) {
        echo "A senha '$senha' atende ao comprimento mínimo de $caracteres caracteres.";
    } else {
        echo "A senha '$senha' não atende ao comprimento mínimo de $caracteres caracteres.";
    }
    ?>

    <h2>Exercício 10: Contagem com while</h2>
    <?php
    $contador = 1;

    while ($contador <= 10) {
        echo $contador . "<br>"; 
        $contador++; 
    }
    ?>


    <h2>Exercício 11: Soma de Números com while</h2>
    <?php
    $soma = 0;
    $numero = 1;

    while ($numero <= 100) {
        $soma += $numero; 
        $numero++; 
    }
    echo "A soma dos números de 1 a 100 é: $soma";
    ?>

    <h2>Exercício 12: Tabuada com for</h2>
    <?php
    $numero = 5;

    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i; 
        echo "$numero x $i = $resultado<br>";} 
    ?>

    <h2>Exercício 13: Fatorial com for</h2>
    <?php
    $numero = 5;

    $fatorial = 1;

    for ($i = 1; $i <= $numero; $i++) {
        $fatorial *= $i; }

    echo "O fatorial de $numero é: $fatorial";
    ?>

    <h2>Exercício 14: Números Pares com for</h2>
    <?php
    $numero = 1;
    for ($numero = 1; $numero <= 50; $numero++) {
        if ($numero % 2 == 0) {
            echo $numero . "<br>"; 
        }
    }
    ?>
 
</body>
</html>