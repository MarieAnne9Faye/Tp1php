<?php
    $resultat = 0;
    for($i = 1; $i <=20; $i++){
        $num = readline("Entrez le nombre numéro ".$i.":");
        if($num > $resultat){
            $resultat = $num;
            $rang = $i;
        }
    }
    echo "Le plus grand nombre est: ".$resultat."\r\n";
    echo "C'était le nombre numéro ".$rang;
?>