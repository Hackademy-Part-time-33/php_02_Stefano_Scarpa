<?php

// traccia1 
//Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere. Esempio di array:

$users = [
    [
        'name' => 'Davide', 
        'surname' => 'Cariola', 
        'gender' => 'M'
    ],

    [
        'name' => 'Stefano', 
        'surname' => 'Scarpa', 
        'gender' => 'M'
    ],
    [
        'name' => 'Silvia', 
        'surname' => 'Rossi', 
        'gender' => 'F'
    ],
    [
        'name' => 'Mario', 
        'surname' => 'Rossi', 
        'gender' => 'NB'
    ],
   ];

foreach($users as $user){
    if($user['gender'] == 'M'){
        echo "Buongiorno sig. " . $user['name'] . " " . $user['surname'] . "\n";
    } else if($user['gender'] == 'F'){
        echo "Buongiorno sig.ra " . $user['name'] . " " . $user['surname'] . "\n";
    } else {
        echo "Buongiorno " . $user['name'] . " " . $user['surname'] . "\n";
    }
};


// traccia 2
// Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array.

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$totPari = 0;

foreach($numbers as $number){
    if ($number % 2 == 0) {
        $sum = $sum + $number;
        $totPari++;
    };
};

$mid = $sum / $totPari;
echo $mid;


//traccia 3
//Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".


for($i = 1; $i <= 100; $i++ ) {
    if($i % 15 == 0) { 
     echo 'HACKADEMY' . "\n";
    } else if($i % 5 == 0) {
     echo 'JAVASCRIPT' . "\n";
    } else if($i % 3 == 0) {
     echo 'PHP' . "\n";
    } else {
     echo $i . "\n";
    };
};