<?php

$nota1 = isset($_GET['n1']) ? $_GET['n1'] : "Sem nota";
$nota2 = isset($_GET['n2']) ? $_GET['n2'] : "Sem nota";

$media = ($nota1 + $nota2) / 2;

if($media < 5) {
    $sitAluno = "Reprovado";
}elseif(($media >= 5) && ($media < 6)) {
    $sitAluno = "Recuperação";
}else{
    $sitAluno = "Aprovado";
}

echo "A média entre $nota1 e $nota2 é igual a " . number_format($media, 1);
echo "<br>";
echo "Situação do Aluno: $sitAluno";

?>

<br><br>
<a href="media.html">
    <input type="button" value="Voltar">
</a>