<?php
    $nombre=readline("Veuillez saisir un nombre compris entre 1 et 3: ");
    while($nombre < 1 || $nombre > 3)
    {
        $nombre=readline("Veuillez saisir un nombre compris entre 1 et 3: ");
    }
    echo 'Bravo! Vous avez trouvé le bon nombre';
    
?>