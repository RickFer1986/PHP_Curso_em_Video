<?php

$p1 = isset($_GET['placar1']) ? $_GET['placar1'] : "W.O";
$p2 = isset($_GET['placar2']) ? $_GET['placar2'] : "W.O";
$p3 = isset($_GET['placar3']) ? $_GET['placar3'] : "W.O";
$p4 = isset($_GET['placar4']) ? $_GET['placar4'] : "W.O";

$t1 = "São Paulo";
$t2 = "Real Madrid";
$t3 = "Juventus";
$t4 = "Paysadú";

echo "$t1 $p1  x  $p2 $t2";
echo "<br>";
echo "$t3 $p3  x  $p4 $t4";

echo "<br>";
$v = 3;
$e = 1;
$d = 0;

$ptsT1 = 0;
$ptsT2 = 0;
$ptsT3 = 0;
$ptsT4 = 0;

$vitoria = 0;
$empate = 0;
$derrota = 0;

if($p1 > $p2) {
    $ptsT1 = $v;
    $ptsT2 = $d;
}elseif($p1 == $p2) {
    $ptsT1 = $e;
    $ptsT2 = $e;
}else{
    $ptsT2 = $v;
    $ptsT1 = $d;
}

echo "$t1 tem $ptsT1 Pontos <br>";
echo "$t2 tem $ptsT2 Pontos";

?>

<h3>São Paulo</h3>
<p>Vitória: </p>
<p>Empate: </p>
<p>Derrota: </p>
<p>Pontos: <?= $ptsT1 ?> </p>
<br><br>
<h3>Real Madri</h3>
<p>Vitória: </p>
<p>Empate: </p>
<p>Derrota: </p>
<p>Pontos: <?= $ptsT2 ?> </p>