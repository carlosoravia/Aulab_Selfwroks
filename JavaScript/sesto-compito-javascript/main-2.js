// 2. creare un oggetto agenda con una proprietà che comprenda una lista di contatti con un nome e un       numero di telefono, ed abbia diverse funzionalità tra cui:
//     - mostrare tutti i contatti dell’agenda;
//     - mostrare un singolo contatto;
//     - eliminare un contatto dall’agenda;
//     - aggiungere un nuovo contatto;
//     - modificare un contatto esistente;


let agenda = {
    // contatti
    'contacts': [
        {'name': 'Carlo', 'Surname': 'Soravia', 'number': 33342743745, 'email': 'carlodwidwdi@bhwduw.com'},
        {'name': 'Giovanni', 'Surname': 'Storti', 'number': 85932743745, 'email': 'Giovannilidwdi@bhwduw.com'},
        {'name': 'Giada', 'Surname': 'Fumagalli', 'number': 536542743745, 'email': 'gaidadwidwdi@bhwduw.com'},
        {'name': 'Ermenegildo', 'Surname': 'Scancansion', 'number': 536242743745, 'email': 'esrmedwidwdi@bhwduw.com'},
    ],
    // mostra tutti i contatti 
    'showContacts': function () {
        this.contacts.forEach(Element => console.log(Element))
    },
    'showSingleContact': function (nome) {
        let filterName = this.contacts.filter(Element => Element.name == nome);
        console.log(filterName);
        if (filterName.lenght == 1) {
            console.log( `contatto: ${filterName[0].name} / ${filterName[0].Surname} / ${filterName[0].number} / ${filterName[0].email}` );
        // }else {console.log(`Il contatto cercato non è salvato in questa agenda`)};
        }; 
    },
    'deleteContact': function (nameContact) {
        let index = this.contacts.map(element => element.name).indexOf(nameContact);
        this.contacts.splice(index, 1);
    },
    'newContact':function (nameContact, lastName, numberContact, emailContact) {
    let newElement = {'name': nameContact, 'surname': lastName, 'number': numberContact, 'email': emailContact}
    this.contacts.push(newElement);
    },
    'modifyContact': function (nameContact, surnameContact, number, mailContact) {
        this.contacts.forEach(element => {
            if (nameContact == element.name) {
                element.Surname = surnameContact;
                element.number = number;
                element.email = mailContact;
            }      
        })
    },
};

agenda.modifyContact('Carlo', 'adess0', 46362328372, 'sjshhsjksnk')
agenda.showContacts(' ')
