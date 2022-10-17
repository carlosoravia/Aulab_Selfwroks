// // 
// - Lavoriamo con il DOM: creare una pagina HTML con 3 paragrafi e 3 bottoni. 
// -  - Il primo bottone dovra’ cambiare il colore del testo, 
// - - il secondo dovra’ rendere i testi in grassetto 
// - - il terzo dovra’ far scomparire e ricomparire i paragrafi(ricordatevi della proprieta’ “display: none” in CSS)


// Inviate tutti gli esercizi su Gitlab

// TITOLO

// let btnChangeColorTitle = document.querySelector('#Title');
// let h1 = document.querySelector('h1');


// btnChangeColorTitle.addEventListener('click',() => {
//     h1.style.color = 'red';
// });



// primo blocco color

let btnChangeColorParagraph = document.querySelector('#btnChangeColor');
let paragrafi = document.querySelectorAll('p');

function colorPragrafi(params) {
    paragrafi.forEach(element => {
        element.style.color = 'red';
    });

}
    

btnChangeColorParagraph.addEventListener('click', () => {
    if (isClicked) {  
        colorPragrafi();
        isClicked = false;
        btnElenco.innerHTML = 'nascondi elenco colorato';
    }else{
        container_1.innerHTML = ' ';
        isClicked = true;
        btnElenco.innerHTML = 'mostra elenco colorato'
    };
});

let btnChangeText = document.querySelector('#btnChangeText');

btnChangeText.addEventListener('click', () =>{
    paragrafi.forEach(element => {
        element.classList.add('bold');
    });
});


let btnChangeVisibility = document.querySelector('#btnChangeVisibility');
let isClicked = true;

function hudinì() {
    paragrafi.forEach(element => {
        element.classList.toggle('hudinì');
    });
}

btnChangeVisibility.addEventListener('click', () => {
    if (isClicked) {
        btnChangeVisibility.innerHTML = "ora non mi vedi";
        hudinì();
        isClicked = false;
    }else {
        hudinì();
        isClicked = true;
        btnChangeVisibility.innerHTML = "ora mi vedi";
    }
})



// Rifare l’esempio dei contatti svolto a lezione ed implementare nuove funzionalita’

let contacts = [
    {'id': 1, 'name': 'nicola'},
    {'id': 2, 'name': 'carlo'},
    {'id': 3, 'name': 'gianluca'},
    {'id': 4, 'name': 'marco'},
    {'id': 5, 'name': 'valery'},
]

function creaElencoNomi() {
    // ripulire un contenitore 
   // container.innerHTML = ' ';
    contacts.forEach(element => {
        let p = document.createElement('p');
        p.innerHTML = `name: ${element.name}`;
        container_1.appendChild(p);
    });
};

let hasClicked = true; 

let btnElenco = document.querySelector('#btnElenco');

btnElenco.addEventListener('click', () => {
    if (hasClicked) {
        creaElencoNomi ()
        hasClicked = false;
        btnElenco.innerHTML = 'nascondi elenco'
    }else {
        container_1.innerHTML = ' ';
        hasClicked = true;
        btnElenco.innerHTML = 'mostra elenco'
    };
});

// funzionalità in più

let btnElencoColori = document.querySelector('#btnElencoColori');




function color() {
    
    contacts.forEach(element => {
        let p = document.createElement('p');
        p.innerHTML = `name: ${element.name}`;
        container_1.appendChild(p);
        p.style.color = 'red'
    });
}

let hasClicked2 = true;


btnElencoColori.addEventListener('click', () => {
    if (hasClicked2) {  
        color();
        hasClicked2 = false;
        btnElenco.innerHTML = 'nascondi elenco colorato';
    }else{
        container_1.innerHTML = ' ';
        hasClicked2 = true;
        btnElenco.innerHTML = 'mostra elenco colorato'
    }
})





// // ordinare array in base all'id 

// let btnId = document.querySelector('#btnId');

// btnId.addEventListener('click', () => {
//     let ordDesk = contacts.sort( function (a, b) {
//         return b.id - a.id;
//     });
//     if (hasClicked) {
//         creaElencoNomi (ordDesk)
//         hasClicked = false;
//         btnElenco.innerHTML = 'nascondi elenco'
//     }else {
//         container.innerHTML = ' ';
//         hasClicked = true;
//         btnElenco.innerHTML = 'mostra elenco'
//     }
// } ); 

