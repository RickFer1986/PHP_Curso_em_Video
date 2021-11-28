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
        $a = 3;
        $b = $a;
        $b += 5;

        echo "A variável A vale $a";
        echo '<br>';
        echo "Avariável B vale $b";
        echo '<br>';
        
        $aa = 3;
        $bb = &$aa;
        $bb += 5;
        
        echo "A variável AA vale $aa";
        echo '<br>';
        echo "A variável BB vale $bb";
    ?>
</div>
</body>
</html>
 