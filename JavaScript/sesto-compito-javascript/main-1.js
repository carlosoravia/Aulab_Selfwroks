
// - Rifare i due esempi svolti a lezione:
// 1. creare un oggetto persona con diverse proprietà e un metodo che permetta alla persona di salutare



let User = {
    // info generali degli users
    'personalInfo': [
        {'name': 'Carlo', 'Surname': 'Soravia', 'number': 33342743745, 'email': 'carlodwidwdi@bhwduw.com'},
        {'name': 'Giovanni', 'Surname': 'Storti', 'number': 85932743745, 'email': 'Giovannilidwdi@bhwduw.com'},
        {'name': 'Giada', 'Surname': 'Fumagalli', 'number': 536542743745, 'email': 'gaidadwidwdi@bhwduw.com'},
        {'name': 'Ermenegildo', 'Surname': 'Scancansion', 'number': 536242743745, 'email': 'esrmedwidwdi@bhwduw.com'},
    ],
    'actionUsers':[
        {'type':'1', 'message': `Salve a tutti!`},
        {'type': '2', 'message': `We, com'è?!`},
        {'type': '3', 'message': `Ciao maledetti 🤪`},
    ],
    // mostra info totali
    'showTotalInfo': function() {
        this.personalInfo.forEach(Element => console.log(Element))    
    },
    // mostra un singolo user cercandolo per nome tutti i dati
    'showOneUserInfoAll': function (nome) {
        let filter = this.personalInfo.filter(Element => Element.name == nome);
        console.log(filter);
        if (filter.length == 1) {
            console.log(`user trovato: ${filter[0].name} / ${filter[0].Surname} / ${filter[0].number} / ${filter[0].email}`);
        } else{
            console.log(`l'utente non corrisponde alla ricerca`)
        }
    },
     // mostra un singolo user cercandolo per nome nascosti i dati sensibili 
    'showOneUserInfoPrivate': function (nome) {
        let filter = this.personalInfo.filter(Element => Element.name == nome);
        console.log(filter);
        if (filter.length == 1) {
            console.log(`user trovato: ${filter[0].name} / ${filter[0].Surname}`);
        } else{
            console.log(`l'utente non corrisponde alla ricerca`)
        }
    },
    // Azione che può fare l'user 
    'sayHello': function (type) {
        let filter2 = this.actionUsers.filter(Element => Element.type == type);
        console.log(filter2);
        if (filter2.length == 1){
            console.log(`${filter2[0].message}`)
        }
    }
}


User.showOneUserInfoAll('Carlo')
User.sayHello('3')