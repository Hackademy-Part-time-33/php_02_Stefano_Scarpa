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

