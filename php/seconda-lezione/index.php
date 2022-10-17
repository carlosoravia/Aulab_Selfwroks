<?php
// - fare il recap
// - riprodurre l’esercizio della password prima procedurale poi funzionale ( senza video se ve la sentite )

// 1. la password deve contenere almeno 8 caratteri
    // 2. la password deve contenere almeno due numeri
    // 3. la password deve contenere almeno un carattere speciale
    // 4. la password deve contenere almeno una lettera in maiusolo


// - EXTRA  aggiungere controllo: la pwd non puo’ contenere caratteri speciali diversi da !, @, $, %, _
// - EXTRA aggiungere informativa iniziale sulle regole della password
// - EXTRA controllare se la password inserita e’ stata gia’ inserita in precedenza. Se e’ stata gia’ inserita, non incrementare il contatore dei tentativi disponibili e mostrare il messaggio personalizzato  

echo"sing-up \n la password deve contenere: \n - almeno 8 caratteri; \n -almeno 2 numeri; \n - almeno un carattere speciale(solo: !, @, $, %, _); \n - almeno una maiuscola; \n";
$password = readline("INSERISCI PASSWORD \n");


$isFirstRuleValid = false;
$isSecondRuleValid = false;
$isThirdRuleValid = false;
$isFourthtRuleValid = false;

$counterTentativi = 0;

// 1. la password deve contenere almeno 8 caratteri

function lenghtChecker($password){
    if (strlen($password) >= 8) {
        return true;
    };
    
}

// 2. la password deve contenere almeno due numeri

function numberChecker($password){
    $counter = 0;
    for ($i=0; $i < strlen($password); $i++) { 
        if (is_numeric($password[$i])) {
            $counter++;
            if ($counter == 2) {
                return true;
                break;
            }
        }
    };
};

// 3. la password deve contenere almeno un carattere speciale

function specialCharChecker($password){
    $arrSpecialChars = ['%', '!', '@', '$'];
    for ($i=0; $i < strlen($password) ; $i++) { 
        if (in_array($password[$i], $arrSpecialChars )) {
            return true;
            break;
        }
    };
}

// 4. la password deve contenere almeno una lettera in maiusolo
function maiuscleChecker($password){
    for ($i=0; $i < strlen($password); $i++) { 
        if (ctype_upper($password[$i])) {
            return true;
            break;
        }
    };
};


// condizioni finali 

function passwordChecker($password){
    return lenghtChecker($password) && numberChecker($password) && specialCharChecker($password) && maiuscleChecker($password); 
};

if (passwordChecker($password)) {
    echo"la password inserita è valida";
}else {
    echo"la password inserita NON è valida";
}

// $array = [];
// $arrray[] = $arrSpecialChars; =>  funziona come il push, 

?>