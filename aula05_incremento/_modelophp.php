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
        $atual = $_GET['aa'];
        echo "Ano atual é $atual " . ++$atual;
        echo '<br>';
    ?>
</div>
</body>
</html>
 