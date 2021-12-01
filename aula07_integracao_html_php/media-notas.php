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
         * Média das notas de um aluno
         */

            $nota1 = $_GET['n1'];
            $nota2 = $_GET['n2'];
            $media = ($nota1 + $nota2) / 2;
            
            echo "A média das notas $nota1 e $nota2 é:  $media <br>";

            $resultado = $media > 5 ? "Aluno Aprovado" : "Aluno Reprovado";

            echo $resultado;

        ?>
    </div>
</body>

</html>
