<?php
    $n = readline("Entrer le nombre de chevaux partants: ");
    $p = readline("Entrer le nombre de chevaux joues: ");
    function factoriel($n){
        $nbr = 1;
        for($i = 1; $i <= $n; $i++){
            $nbr *= $i;
        }
        return $nbr;
    }
    $x = factoriel($n)/factoriel($n-$p);
    $y = factoriel($n)/(factoriel($p)*factoriel($n-$p));
    echo "Dans l'ordre:  une chance sur ".$x." de gagner \r\n";
    echo "Dans le desordre: une chance sur ".$y." de gagner \r\n";

?>