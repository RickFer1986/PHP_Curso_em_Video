<?php

$nome = isset($_GET['nome']) ? $_GET['nome'] : "Sem nome";
$ano = isset($_GET['idade']) ? $_GET['idade'] : "Sem idade";

$idade = date("Y") - $ano;

echo "$nome tem $idade anos <br>";

$maiorIdade = $_GET['valid'];
$menorIdade = $_GET['valid'];

if($idade >= 18 && $maiorIdade) {
    echo "Pode dirigir: $maiorIdade";
}elseif($idade < 18 && $maiorIdade){
    echo "Você tem  idade menor que 18 anos";
}else{
    echo "Não pode dirigir";
}