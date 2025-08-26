<?php
    $vetor1 = [1, 2, 3, 4, 5];
    $vetor2 = [];
    

    for ($i = 0; $i < 5; $i++){
        $vetor2[$i] = $vetor1[$i];
        echo ($vetor2[$i]."\n");
    }