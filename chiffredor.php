<?php

$x = random_int(0, 99);
$ch = 3;

$num = readline("Veuillez saisir un nombre: ");
for($ch = 3;$ch > 0;$ch--){
    if($x !== $num){
        echo "Incorrecte! Il vous reste ".$ch." essais\r\n";
          $num = readline("Veuillez saisir un nombre: ");
    }
    elseif($x==$num){
        echo "Correcte";
        $ch = 0;
    }
}
echo "vous avez fait trois tentatives.Le bon resultat est ".$x;



?>
