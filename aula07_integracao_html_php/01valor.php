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
        $valor = $_GET['v'];
        $rq = sqrt($valor);
        echo "A raiz quadrada de $valor é igual a " . number_format($rq, 3);
    ?>
    <br>
    <a href="formulario.html">Voltar</a>
</div>
</body>
</html>
 