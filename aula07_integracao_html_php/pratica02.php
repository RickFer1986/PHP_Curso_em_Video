<?php

# Utilizando o ternário para verificar o que foi passado no parametro na URL
$nome = isset($_GET['nome']) ? $_GET['nome'] : "Não informado";
$ano = isset($_GET['ano']) ? $_GET['ano'] : "Não informado";
$sexo = isset($_GET['sexo']) ? $_GET['sexo'] : "Não informado";

$idade = date("Y") - $ano;

echo "<h2>$nome do sexo $sexo tem $idade anos.</h2>";
?>

<style>
    h2{
        color: blue;
        font-size: 1.2rem;
        text-align: center;
    }
</style>