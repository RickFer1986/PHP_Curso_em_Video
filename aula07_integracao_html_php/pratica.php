<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="_css/estilo.css" />
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
</head>

<body>
    <div>
        <?php
        /**
         * Passando 2 numeros e verificando a soma ou multiplicação entre eles
         */
            $v1 = $_GET['a'];
            $v2 = $_GET['b'];
            $tipo = $_GET['tp'];

            echo "Os valores passados foram $v1 e $v2 <br>";

            $result = $tipo == "s" ? $v1 + $v2 : $v1 * $v2;

            echo "Resultado = $result";
        ?>
    </div>
</body>

</html>
