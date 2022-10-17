
// - Creare una tabella mediante Bootstrap: https://getbootstrap.com/docs/5.2/content/tables/
// - Creare in maniera dinamica le righe della tabella utilizzando come dato “grezzo” la variabile rubrica, implementando le seguenti funzionalità:
//         - mostrare o nascondere tutti i contatti dell’agenda
//         - eliminare un contatto dall’agenda
//         - aggiungere un nuovo contatto
//         - modificare un contatto esistente
    
    
    
let rubrica = {
    'contacts': [
    {'id': 1, 'name': 'Matteo', 'number': 33333333},
    {'id': 2, 'name': 'Nicola', 'number': 33344444},
    {'id': 3, 'name': 'Marco', 'number': 33355555},
    ],
};

let wrapper = document.querySelector('#wrapped');

rubrica.contacts.forEach(element => {
    let tr = document.createElement('tr');
    
    tr.innerHTML = `
    <tr>
        <th scope="row">${element.id}</th>
        <td>${element.name}</td>
        <td>${element.number}</td>
    </tr>  `
    wrapper.appendChild(tr);
});

let btnDelete = document.querySelector('#btnDelete');
let inputNameDelete = document.querySelector('#')

