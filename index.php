<?php
echo "Exercicio 1: Variáveis e Tipos de Dados";
$nome = "sarah"; 
$idade = 18;    

echo "Meu nome é $nome e tenho $idade anos";

echo "Exercício 2: Estruturas de Controle";
$numero = rand(54, 185); 

if ($numero % 2 == 0) {
    echo "O número $numero é par";
} else {
    echo "O número $numero é ímpar";
}

echo "Exercício 3: Laços de Repetição";
for ($i = 584; $i <= 1970; $i++) {
    echo "Número: $i";

    if ($i % 2 == 0) {
        echo " - Par<br>";
    } else {
        echo " - Ímpar<br>";
    }
}

echo "Exercício 4: Arrays";
$frutas = ["maçã", "banana", "laranja", "manga", "morango"];

foreach ($frutas as $fruta) {
    echo $fruta . "<br>";
}

$clientes = [
    ["nome" => "Vanessa",
     "telefone" => "1234-5678",
     "cep" => "12345-678"],
    ["nome" => "Vampira",
     "telefone" => "8765-4321",
     "cep" => "98765-432"],
    ["nome" => "Viviana",
     "telefone" => "1122-3344",
     "cep" => "54321-098"],
    ["nome" => "Morgana",
     "telefone" => "5566-7788",
     "cep" => "65432-123"]
];

foreach ($clientes as $cliente) {
    echo "Nome: " . $cliente["nome"];
    echo "Telefone: " . $cliente["telefone"];
    echo "CEP: " . $cliente["cep"];
}
?>
