<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php

        $nome = $_GET['nome'];
        $ano = $_GET['ano'];
        $sexo = $_GET['sexo'];

        $idade = date("Y") - $ano;

        echo "$nome do Sexo $sexo tem $idade anos";

    ?>
    <br>
    <a href="02_formulario.html">Voltar</a>
</div>
</body>
</html>
 