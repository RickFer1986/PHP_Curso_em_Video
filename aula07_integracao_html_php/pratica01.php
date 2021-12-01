<?php

$valor = $_GET['v'];

$rq = sqrt($valor);

echo "A Raiz de $valor é: " . number_format($rq, 2);