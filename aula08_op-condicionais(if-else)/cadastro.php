<?php

$nome = isset($_GET['nome']) ? $_GET['nome'] : "Campo Obrigatório";
$email  = isset($_GET['email']) ? $_GET['email'] : "E-mail é obrigtório";
$end = isset($_GET['end']) ? $_GET['end'] : "Não obrigatório";
$cep = isset($_GET['cep']) ? $_GET['cep'] : "Não obrigatório";


?>

<style>
    .container {
        max-width: 400px;
        margin: 0 auto;
        border: 1px solid blue;
        background-color: #fd9;
        border-radius: 5px;
    }
    h2{
        text-align: center;
    }
</style>

<div class="container">
    <h2>Ficha de Cadastro</h2>
    <br>
    <p> Nome: <?= $nome ?> </p>
    <p> E-mail: <?= $email ?> </p>
    <p> Endereço: <?= $end ?> </p>
    <p> CEP: <?= $cep ?> </p>
    <input type="submit" value="Imprimir">
</div>