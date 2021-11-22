<?php
    $resultat = 0;
    $num = readline("Entrer un nombre: ");
    while($num != 0){
        if($num > $resultat){
            $resultat = $num;
            
        }
        $num = readline("Entrer un nombre: ");

    }
    echo "Le plus grand nombre est: ".$resultat;

?>