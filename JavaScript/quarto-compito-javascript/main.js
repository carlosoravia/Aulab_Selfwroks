/*

- Svolgere i seguenti esercizi:
    - ES - 10
          Scrivi due funzioni una che prenda in input un array di numeri e restituisca il maggiore,
          l'altra che restituisca il minore.
          Esempio:
          Input: a = 1, b = -10, c = 4
          Output: minore = -10, maggiore = 4
    
    - ES - 11
        Metti un po' d'ordine
        Scrivi un programma che dato un array di 10 numeri interi ordinati in modo casuale li riordini in modo decrescente.
          Esempio:
            Input: array = [3, 7, -2, 5, 8, 1, 2, 5, 6, -4]
            Output: [8, 7, 6, 5, 5, 3, 2, 1, -2, -4]
          Variante:
          Prova ad ordinali in modo crescente.
      
    - ES - 12
    Operazioni tra array
        Scrivi un programma che dati:
          - 2 array di 10 elementi interi casuali compresi tra 1 e 10,
          - il tipo di operazione aritmetica da effettuare, una delle seguenti:
            addizione
            sottrazione
            moltiplicazione
            divisione
           Esegua il calcolo tra ogni elemento dei due array, salvando ciascun risultato in un terzo array d’appoggio.
        
          Esempio:
            Input: a= [3, 7, 2, 5, 8, 1, 2, 5, 6, 4], b= [9, 3, 1, 4, 7, 6, 5, 10, 1, 5], operazione = "addizione"
            Output: c = [12, 10, 3, 9, 15, 7, 7, 15, 7, 9]
*/



/*
- ES - 10
          Scrivi due funzioni una che prenda in input un array di numeri e restituisca il maggiore,
          l'altra che restituisca il minore.
          Esempio:
          Input: a = 1, b = -10, c = 4
          Output: minore = -10, maggiore = 4
*/




let Temperature = [1, -10, 4, 22, -2, 9];
function TempChecker(Temperature) {
  let MaxTemperature = Math.max(...Temperature);
  let MinTemperature = Math.min(...Temperature);
  return `la temperatura massima è di ${MaxTemperature} gradi e quella minima è di ${MinTemperature} gradi`

}

console.log(TempChecker(Temperature)); 


// TORNACI DOPO

// let Temperature = [1, -10, 4, 22, -2, 9];
// let accomulatore = 0

// for(let i = 0; i < Temperature.length; i++){
//     function TemperatureChecker(Temperature) {
//         let MaxTemperature = Math.max(...Temperature);
//         let MinTemoerature = Math.min(...Temperature);
//         return `la temperature massima è di ${MaxTemperature} e quella minima è di ${MinTemoerature}`
//     }
// }

// console.log(TemperatureChecker(' '))


// - ES - 11
//         Metti un po' d'ordine
//         Scrivi un programma che dato un array di 10 numeri interi ordinati in modo casuale li riordini in modo decrescente.
//           Esempio:
//             Input: array = [3, 7, -2, 5, 8, 1, 2, 5, 6, -4]
//             Output: [8, 7, 6, 5, 5, 3, 2, 1, -2, -4]
//           Variante:
//           Prova ad ordinali in modo crescente.

let NumeriRandom = [3, 7, -2, 5, 8, 1, 2, 5, 6, -4];

  function Reoder(NumeriRandom) {
    let up = NumeriRandom.sort(function(a, b){return a - b});
    let down = NumeriRandom.sort(function(a, b){return b - a});
    return `i numeri in maniera crescente sono ${up} i numeri decrescenti sono ${down}`
  }
console.log(Reoder(NumeriRandom));

/*
- ES - 12
Operazioni tra array
    Scrivi un programma che dati:
      - 2 array di 10 elementi interi casuali compresi tra 1 e 10,
      - il tipo di operazione aritmetica da effettuare, una delle seguenti:
        addizione
        sottrazione
        moltiplicazione
        divisione
       Esegua il calcolo tra ogni elemento dei due array, salvando ciascun risultato in un terzo array d’appoggio.
    
      Esempio:
        Input: a= [3, 7, 2, 5, 8, 1, 2, 5, 6, 4], b= [9, 3, 1, 4, 7, 6, 5, 10, 1, 5], operazione = "addizione"
        Output: c = [12, 10, 3, 9, 15, 7, 7, 15, 7, 9]
*/



let array1 = [3, 7, 2, 5, 8, 1, 2, 5, 6, 4];
let array2 = [9, 3, 1, 4, 7, 6, 5, 10, 1, 5];


var ArraySum = array1.map(function (num, idx) {
  return num + array2[idx];
}); 

console.log(ArraySum)


/*
- ES - 13
Scrivi un programma che dato un array di numeri, calcoli la media dei valori e
restituisca in output la media e tutti i valori minori della media.

Esempio:
  Input: a = [3, 5, 10, 2, 8]
  Output: media = 5.6, valori minori = [3, 5, 2]
  
Variante:
Stampa anche quanti sono i valori minori della media e quanti quelli maggiori. 
*/


let ValoriRandom = [3, 5, 44, 65, 32, 22, 9, 1];

function ArrayAverage(ValoriRandom) {
  const average = ValoriRandom.reduce((a, b) => a + b, 0) / ValoriRandom.length;
  for (let i = 0; i < ValoriRandom.length; i++) {
    const ValoriMinimi = ValoriRandom.find((a, b) => b < average, 0);
    return `la media è di ${average} ed i valori minimi sono ${ValoriMinimi}`
  }
  
  
}



console.log(ArrayAverage(ValoriRandom));