<?php

// Esercizio-03

// Controllo se il numero corrente è multiplo di 3 e 5 contemporaneamente

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "HACKADEMY66 ";
        
    }
    
// Controllo se il numero corrente è multiplo di 3
    
    elseif ($i % 3 == 0) {
        echo "PHP ";
    } 
    
// Controllo se il numero corrente è multiplo di 5

    elseif ($i % 5 == 0) {
        echo "JAVASCRIPT ";
    } 
    
// Caso in cui il numero non è multiplo né di 3 né di 5
    
    else {
        echo $i . ' ';
    }
}
?>
