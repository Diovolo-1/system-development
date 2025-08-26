<?php
    $vetor1 = array(1, 2, 3, 4, 5);
    $vetor2 = array(10, 20, 30, 40, 50);
    $vetor3 = [];
    

    for ($i = 0; $i < 5; $i++){
        $vetor3[$i] = $vetor2[$i] + $vetor1[$i];
        echo ($vetor3[$i]."\n");
    }