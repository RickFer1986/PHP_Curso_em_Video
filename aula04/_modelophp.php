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
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];

        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        echo "Os valores digitados: $v1 e $v2";
        echo "<br>";
        echo "Os valores digitados é: $n1 e $n2";
        echo "<br>";
        echo "Valor absoluto de $v2 é: " . abs($v2);
        echo "<br>";
        echo "Valor absoluto de $n2 é: " .abs($n2);
        echo "<br>";
        echo "O valor de $v1<sup>$v2</sup> é: " . pow($v1, $v2);
        echo "<br>";
        echo "O valor de $n1<sup>$n2</sup> é: " . pow($n1, $n2);
        echo "<br>";
        echo "A raiz quadrada de $v1 é " . sqrt($v1);
        echo "<br>";
        echo "A raiz de $n1 é: " . sqrt($n1);
        echo "<br>";
        echo "O valor de $v2 arredondado é: " . round($v2); // ceil (Para cima) ou floor (Para baixo)
        echo "<br>";
        echo "O valor de $n1 arredondado é: " . floor($n1);
        echo "<br>";
        echo "A parte inteira de $v2 é: " . intval($v2);
        echo "<br>";
        echo "A parte inteira de $n1 é: " . intval($n1);
        echo "<br>";
        echo "O valor de $v1 em moeda é: R$" . number_format($v1, 2);
        echo "<br>";

    ?>
</div>
</body>
</html>
 