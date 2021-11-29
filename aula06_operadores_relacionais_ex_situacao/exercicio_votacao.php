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
        $ano = $_GET['an'];
        $idade = 2021 - $ano;

        echo "Nascidos em $ano tem idade de $idade anos. <br>";
        $tipo = ($idade >=18 && $idade < 65) ? "Obrigatório" : "Não obrigatório";

        echo "Dessa forma seu voto é $tipo";
    ?>
</div>
</body>
</html>