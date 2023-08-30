<?php
// Esercizio numero 0-1

// Array di numeri di esempio

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Variabili per il calcolo

$sum = 0;
$count = 0;

// Calcolo della media dei numeri pari

foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        $sum += $number;
        $count++;
    }
}

// Calcolo della media

// if ($count > 0) {
//     $average = $sum / $count;
//     echo "La media dei numeri pari è: " . $average;
// } else {
//     echo "Non ci sono numeri pari nell'array.";
// }

$avg = $sum / $count;

echo $avg;  

?>
