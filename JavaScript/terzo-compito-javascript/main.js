/* 

- Svolgere gli esercizi:
    Funzioni 
    - ES - 7
        Scrivi una funzione di uguaglianza che prenda in input due parametri e restituisca TRUE se i due parametri sono IDENTICI, altrimenti FALSE.
         Esempi:
            Input: num1 = 2, num2= 3
            Output: FALSE
            Input: num1 = 2, num2 = '2'
            Output: FALSE
            Input: num1 = 2, num2 = 2
            Output: TRUE
    
    - ES - 8
        Scrivi una funzione che dato un numero intero (massimo 9999) conti da quante cifre è formato.
        Esempi:
            Input : 9
            Output :  1 cifra
        
            Input : 99
            Output :  2 cifre
    
    - ES - 9 
        Scrivi una funzione che prenda in input una stringa e restituisca TRUE se è palindroma, FALSE se non lo è.
        - Nel controllo scarta gli spazi e i segni di punteggiatura.
            Esempio:
            Input: “i topi non avevano nipoti”
            Output: TRUE
        
        Consigli:
        Puoi eliminare spazi e segni di punteggiatura usando :
          
     str.replace(/\W/g, "").

*/

/*
- ES - 7
        Scrivi una funzione di uguaglianza che prenda in input due parametri e restituisca TRUE se i due parametri sono IDENTICI, altrimenti FALSE.
         Esempi:
            Input: num1 = 2, num2= 3
            Output: FALSE
            Input: num1 = 2, num2 = '2'
            Output: FALSE
            Input: num1 = 2, num2 = 2
            Output: TRUE
*/


let num1 = 3;
let num2 = 3;


function verifica(num1, num2) {
    if(num1 === num2){
        return `TRUE`
    }else {
        return `FALSE`
    }
}

console.log(verifica(num1, num2))

/*
- ES - 8
Scrivi una funzione che dato un numero intero (massimo 9999) conti da quante cifre è formato.
Esempi:
    Input : 9
    Output :  1 cifra

    Input : 99
    Output :  2 cifre
*/

let input = 6780;
function contacifre (input) {
    return input.toString().length;
}

console.log(contacifre(input))



/*
- ES - 9 
Scrivi una funzione che prenda in input una stringa e restituisca TRUE se è palindroma, FALSE se non lo è.
- Nel controllo scarta gli spazi e i segni di punteggiatura.
    Esempio:
    Input: “i topi non avevano nipoti”
    Output: TRUE

Consigli:
Puoi eliminare spazi e segni di punteggiatura usando :
  
str.replace(/\W/g, "").
*/

let input2 = "i topi non avevano nipoti";


function unitore(input2) {
    let StringaUnita = input2.replace(/\W/g, "");
    let StringaReverse = StringaUnita.split(" ").map(word => word.split("").reverse().join(""));
    if(StringaReverse = input2){
        return `La frase è palindroma`
    }else{
        return `la fare non è palindroma`
    }
}
console.log(unitore(' '))





/*
- Scrivi un programma che dato un numero totale di gatti e il numero dei gatti presenti in ogni fila, restituisca in console:
    - Il numero di file risultanti
    - e nel caso l'ultima fila risulti incompleta indicare il numero di gatti mancanti per completarla

Ad esempio:

    let totGatti = 44;
    let gattiInOgniFila = 6;

Stampare in console: “Ci sono 7 file di gatti e ne mancano 4 per una nuova fila”
*/





function file(TotGatti, GattiPerFila) {
    let fileGatti = Math.floor(TotGatti / GattiPerFila);
    let GattiRimanenti = TotGatti % GattiPerFila;
    return `ci sono ${fileGatti} file di gatti e ne mancano ${GattiRimanenti} per una nuova fila`
}
console.log (file(289096, 10))


// - ES - 2

//   Scrivi un programma che dati sette valori relativi alle temperature della settimana
//   stabilisca la giornata più calda e quella più fredda.
//   Esempio:

//     let temp1 = 10;
//     let temp2 = -2;
//     let temp3 = 31;
//     let temp4 = 22;
//     let temp5 = 15;
//     let temp6 = -6;
//     let temp7 = 7;

//   Stampare in console: “La temperatura piu’ calda e’ 31 quella piu’ fredda -6

let temp1 = 10;
let temp2 = -2;
let temp3 = 31;
let temp4 = 22;
let temp5 = 15;
let temp6 = -6;
let temp7 = 7;

console.log(`La temperatura piu’ calda e’ ${Math.max(temp1, temp2, temp3, temp4, temp5, temp6, temp7)} quella piu’ fredda ${Math.min(temp1, temp2, temp3, temp4, temp5, temp6, temp7)}`);




// Scrivi un programma che dato un numero intero compreso tra 1 e 7
// visualizzi il corrispondente giorno della settimana. Sapendo che:
//   1 = lunedì
//   2 = martedì
//   3 = mercoledì
//   ...
//   7 = domenica
// Esempi:
//   Se e’ day == 1:

//       Stampare: "Sabato"

//   Se e’ day == 10:

//       Stampare: “Errore! Giorno della settimana non valido!"



let day = 5;

if (day == 1) {
    console.log (`Lunedì`);
}else if (day == 2) {
    console.log (`Martedì`);
}else if (day == 3) {
    console.log (`Mercoledì`);
}else if (day == 4) {
    console.log (`Giovedì`);
}else if (day == 5) {
    console.log (`Venerdì`);
}else if (day == 6) {
    console.log (`Sabato`);
}else if (day == 7) {
    console.log(`Domenica`)
}else {
    console.log (`Errore giorno della settimana non valido`);
}
    


// Scrivi un programma che converta un voto numerico (vote) in un giudizio seguendo questi parametri:
// vote < 18: insufficiente
// 18 <= vote < 21: sufficiente
// 21 <= vote < 24: buono
// 24 <= vote < 27: distinto
// 27 <= vote <= 29: ottimo
// vote = 30: eccellente
// Esempio:

//    let vote = 29 

// Stampare: “Ottimo”




function voto(vote) {
    if(vote < 18 && vote >= 0){
        return`Insufficiente`
    }else if(vote > 18 && vote <= 21){
        return`Sufficiente`
    }else if(vote > 22 && vote <= 24){
        return `Buono`
    }else if(vote > 25 && vote <= 27){
        return `Distinto`
    }else if(vote > 28 && vote <= 29){
        return`Ottimo`
    }else if(vote == 30){
        console.log(`Eccelel`)
    }else{
        return`Il voto inserito non è valido`
    }
}

console.log(voto(24))

// - ES - 5 (è il più bello)

// Scrivi un programma che, dato un numero, let NumberOfShots, simuli un gioco di dadi tra due utenti.  
// Stampare il giocatore che ha totalizzato più punti, tenendo conto che:

// - ogni dado ha 6 facce
// - ogni giocatore tirerà il dado n volte

// Per ogni giocatore:

// - generare un numero casuale per ogni tiro che effettuera’,
// - ed ogni tiro sarà sommato ai precedenti per calcolare il punteggio finale del giocatore rispettivo.

// Suggerimento:

// - usiamo questa formula per generare un numero casuale per ogni tiro Math.floor(Math.random() * (max - min + 1) + min);

 
// Suggerimento:

// - Usiamo questa formula per generare un numero random
//     Math.floor(Math.random() * (6 - 1 + 1) + 1);


// inizio del gioco 
let max = 6;
let min = 1;

let NumberOfShots = 8;

let punteggio1 = 0;
let punteggio2 = 0;



for(let i = 0; i <= NumberOfShots; i++){
    let dado1 = Math.floor(Math.random() * (6 - 1 + 1) + 1);
    punteggio1 += dado1
    let dado2 = Math.floor(Math.random() * (6 - 1 + 1) + 1);
    // punteggio1 = punteggio1 + dado1 
    punteggio2 += dado2
}

// condizioni di vincita
let PUNTEGGIO_MAX = Math.max(punteggio1, punteggio2)
if(punteggio1 > punteggio2){
    console.log(`Player 1 hai vinto con ${punteggio1} punti`)
}else if(punteggio1 < punteggio2){
    console.log(`Player 2 hai vinto con ${punteggio2} punti`)
}else {
    console.log(`avete pareggiato`)
}



// Scrivi un programma che dato un numero stampi la tabellina corrispondente.

let n = 7;
let i = 1;

while (i < 10) {
    console.log(n)
    n * i++
}