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
        $preco = $_GET['p'];
        $parcela = $_GET['pa'];
        $porcento = $_GET['po'];
        echo "O preço do produto é R$ " . number_format($preco, 2);
        echo '<br>';
        $valorPar = $preco / $parcela;
        if($parcela == 1) {
          $preco -= ($preco * 10 / 100);
          echo "A vista R$ " . number_format($preco, 2);
        } elseif($parcela == 2) {
          $preco += ($preco * 10 / 100);
          echo "Parcelado em " . $_GET['pa'] . " de R$ " . number_format($preco, 2);          
        }elseif($parcela == 3) {
          $preco += ($preco * 15 / 100);
          echo "Parcelado em " . $_GET['pa'] . " de R$ " . number_format($preco, 2);
        }elseif($parcela == 4) {
          $preco += ($preco * 20 / 100);
          echo "Parcelado em " . $_GET['pa'] . " de R$ " . number_format($preco, 2);
        } else {
          $preco += ($preco * 25 / 100);
          echo "Parcelado em " . $_GET['pa'] . " de R$ " . number_format($preco, 2);
        }  
          echo '<br>';
          echo "Total a pagar R$ " . number_format($preco, 2);
        //echo "Parcela de " . $_GET['pa'] . "x " . "R$ " . number_format($valorPar, 2);
        //$preco += ($preco * $_GET['po'] / 100);
        //echo "Valor com " . $_GET['po'] . "%" . " de desconto R$ " . number_format($preco, 2);
        
    ?>
</div>
</body>
</html>
 