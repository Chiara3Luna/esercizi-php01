<?php

// Esercizio-02

$users = [
    ['name' => 'Lana', 
    'surname' => 'Banana', 
    'gender' => 'F'],
    
    ['name' => 'Dario', 
    'surname' => 'Cammello', 
    'gender' => 'M'],

    ['name' => 'Carola', 
    'surname' => 'Bababi', 
    'gender' => 'F'],


];


// Attraverso ogni utente nell'array $users

foreach ($users as $user) {
    $saluto = 'Buongiorno';

// Verifica il genere dell'utente corrente
    
    if ($user['gender'] == 'M') {
        $saluto .= ' Sig.'; // Aggiungi 'Sig.' se il genere è Maschile
    } 
    
    elseif ($user['gender'] == 'F') {
        $saluto .= ' Sig.ra'; // Aggiungi 'Sig.ra' se il genere è Femminile
    }

// Aggiungi il nome e il cognome dell'utente alla stringa di saluto
    
    $saluto .= ' ' . $user['name'] . ' ' . $user['surname'];

// Stampa il saluto completo per l'utente corrente
    
    echo $saluto . "\n";
}
?>
