<?php
    $num=readline("Veuillez saisir un nombre compris entre 10 et 20: ");
    while($num < 10 || $num> 20)
    {
        if($num < 10)
        {
            echo "Veuillez saisir un nombre plus grand\r\n";
        }
         else{
                echo "Veuillez saisir un nombre plus petit\r\n";
             }
         
            $num=readline("Veuillez saisir un nombre compris entre 10 et 20: ");
     }
    
            echo ' Bravo! Vous avez saisi le bon nombre'

?>