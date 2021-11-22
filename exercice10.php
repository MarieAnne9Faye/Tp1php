<?php
    $prix = readline("Entrer le prix: ");
    $total = 0;
    while($prix != 0){
        $total += $prix;
        $prix = readline("Entrer le prix: ");
    }
    echo "Le total à payer est ".$total."\r\n";
    $paye = readline("Entrer le montant: ");
    $monnai = $paye - $total;
    

    
?>