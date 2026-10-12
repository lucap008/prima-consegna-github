<?php    
    $base=$_POST['base'];
    $altezza=$_POST['altezza'];
    echo "base: ".$base . "<br>";
    echo "perimetro: ".$perimetro . "<br>";
    $area=0;
    $area=$base*$altezza;
    echo "area: ".$area . "<br>";
    $perimetro=0;
    $perimetro=($base*2)+($altezza*2);
    echo "perimetro: ".$perimetro;
    $diagonale=0;
    $diagonale = sqrt(pow($base, 2)+pow($altezza, 2));
    echo "diagonale: ".$diagonale;
?>