

<?php
//inizio del compito  
// Scrivere un programma che calcoli la media di un array di numeri interi, considerando solo i numeri divisibili per 2

$Numbers = [22, 45, 4, 6, 1, 28, 56, 33, 20, 463, 424];

$Numbers_even = [];

foreach($Numbers as $element){
    if ($element % 2 == 0) {
        array_push($Numbers_even, $element);
        $count = count($Numbers_even);
        $tot = array_sum($Numbers_even); 
    }
}
$average = ($tot / $count);

echo($average);






// Creare un array di persone con nome, cognome e genere. Se il genere e’ M stampare “Buongiorno Sig.” e se e’ F stampare “Buongiorno Sig.ra”


$Persone = [
    [
        "name" => "carlo",
        "surname" => "soravia",
        "sesso" => "M"
    ],
    [
        "name" => "marianna",
        "surname" => "seslmld",
        "sesso" => "F"
    ],
    [
        "name" => "giovanna",
        "surname" => "fjsdsdl",
        "sesso" => "F"
    ],
    [
        "name" => "francesco",
        "surname" => "dgsdados",
        "sesso" => "M"
    ],
    [
        "name" => "lena",
        "surname" => "soravia",
        "sesso" => "F"
    ]
];

foreach($Persone as $element){
    foreach($element as $key => $value){
        if ($value === 'F') {
            echo("salve signora");
        } elseif ($value === 'M') {
            echo("salve signore");
        }
    }
}



//Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero e’ multiplo di 3, non deve stampare il numero ma “PHP”; se multiplo di 5 deve stampare “JAVASCRIPT”; se multiplo di 3 e 5 (15) deve stampare “HACKADEMY53".

for ($i=0; $i <= 100 ; $i++) { 
    if ($i) {
        # code...
    }
}


?>