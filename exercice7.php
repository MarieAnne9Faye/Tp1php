<?php
    $num = readline("Entrez un nombre: ");
    $resultat=1;
    for($i = 1; $i <= $num; $i++){
        $resultat *= $i;
    }
    echo "Le resultat est ".$resultat;

?>