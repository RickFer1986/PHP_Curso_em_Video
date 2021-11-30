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
        # ISSET: significa foi configurado (se foi passado como parâmetro)
        $nome = isset($_GET['nome']) ? $_GET['nome'] : "[Não informado]";
        $ano = isset($_GET['ano']) ? $_GET['ano'] : 0;
        $sexo = isset($_GET['sexo']) ? $_GET['sexo'] : "[Sem sexo]";

        $idade = date("Y") - $ano;

        echo "$nome do Sexo $sexo tem $idade anos";

    ?>
    <br>
    <a href="02_formulario.html">Voltar</a>
</div>
</body>
</html>
 