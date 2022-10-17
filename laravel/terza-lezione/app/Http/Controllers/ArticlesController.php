<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public $articles = [

        ['id'=>1,
            'title'=> "Come comprare una macchina nuova a costo zero",
            'subtitle'=> "L'ho rubata",
            'body'=> "Tesla nasce dalle menti visionarie di Martin Eberhard e Marc Tarpenning, due ingegneri statunitensi che nel 2003 battezzarono la neonata casa automobilistica con il cognome del celebre fisico Nikola Tesla. La vera svolta arrivò un anno dopo, quando il magnate americano Elon Musk già noto per aver fondato Paypal rilevò l’azienda, assumendo il ruolo di CEO e supervisore dell’area design.
            E proprio da un’idea di Musk, nel 2005, nacque la prima auto Tesla: la Roadster. Sviluppata in collaborazione con la Lotus, la Roadster era in realtà una Elise “svestita” del suo motore a combustione ed equipaggiata con propulsore elettrico da 248 CV interamente prodotto dalla Tesla. La vettura, dopo ben due anni di collaudo e sviluppo, entrò in produzione soltanto nel corso del 2008. Nel frattempo la casa californiana aveva già in cantiere quella che sarebbe diventata l’auto ammiraglia della straordinaria gamma di auto elettriche Tesla.",
            'category'=> "auto",
            'img'=>'/img/1.webp'
        ],
        [
            'id'=>2,
            'title'=> "Nuovo cellulare da 10000$",
            'subtitle'=> "Sono povero non posso comprarlo",
            'body'=> "Doppia fotocamera da 12MP con ultra grandangolo e grandangolo Grandangolo: ƒ/1.8
            Ultra-grandangolo: ƒ/2.4 e angolo di campo 120° Zoom out ottico: 2x  Zoom digitale: fino a 5x
            Modalità Ritratto con effetto bokeh avanzato e Controllo profondità Illuminazione ritratto con sei effetti (naturale, set fotografico, contouring, teatro, teatro b/n, high key b/n) Stabilizzazione ottica dell’immagine (grandangolo)Obiettivo a sei elementi (grandangolo); obiettivo a cinque elementi (ultra-grandangolo)",
            'category'=> "telefono",
            'img'=>'/img/2.webp'
        ],
        [
            'id'=>3,
            'title'=> "Frigorifero ultra leggero",
            'subtitle'=> "Mangio sempre fuori",
            'body'=>"chede tecniche frigoriferi San Giorgio. In questa pagina vengono riportate le schede tecniche ed i manuali d’uso dei frigoriferi prodotti da San Giorgio. Le schede tecniche servono a valutare le caratteristiche di un prodotto, mentre i manuali uso, sia per i modelli più vecchi che nuovi, sono utili per l’uso corrente del frigorifero stesso. L’obiettivo di questo sito è quello di mettere a disposizione degli utenti un vasto database di schede tecniche e manuali uso non sempre facilmente reperibili in un unico sito. Cliccando su uno dei link verrete ridirezionati alla pagina del sito, da dove potrete scaricare liberamente le schede tecniche o i manuali d’uso dei diversi modelli di frigoriferi. ",
            'category'=> "frigorifero",
            'img'=>'/img/3.jpg'
        ],
        [
            'id'=>4,
            'title'=>"Nuovo pianoforte senza tastiera",
            'subtitle'=>"Non lo so suonare",
            'body'=>"Posizionare bene la mano, le dita, il polso, il braccio e tutto il resto del corpo quando si suona il pianoforte è molto importante.Una corretta impostazione permette di suonare meglio, con più facilità e naturalezza.Inoltre mantenendo la mano ed il braccio rilassati si può suonare il piano di seguito per ore.
            Articolare le dita in modo corretto e posizionare la mano ed il polso nel modo migliore garantisce al pianista la possibilità di suonare passaggi tecnicamente molto difficili, di sbagliare molto di meno e di stancarsi al minimo. Molti brani pianistici sono impossibili da suonare se non si imposta nel modo corretto la mano e le dita. Vediamo insieme qual è la corretta posizione di ogni elemento del corpo umano che concorre all’esecuzione.",
            'category'=>"Musica",
            'img'=>'/img/4.jpg'
        ],
        [
            'id'=>5,
            'title'=>"Star Wars",
            'subtitle'=>"Ennesimo film di Star Wars",
            'body'=> "Guerre stellari (titolo originale inglese Star Wars) è un franchise creato da George Lucas, che si sviluppa da una saga cinematografica iniziata nel 1977 col film Guerre stellari, sottotitolato retroattivamente Episodio IV - Una nuova speranza. A questo film sono seguite altre due pellicole, distribuite a tre anni di distanza l'una dall'altra: L'Impero colpisce ancora (1980) e Il ritorno dello Jedi (1983). Questi tre film costituiscono la cosiddetta trilogia originale. Sedici anni dopo l'uscita dell'ultimo film, Lucas decise di girare una trilogia prequel, composta da La minaccia fantasma (1999), L'attacco dei cloni (2002) e La vendetta dei Sith (2005). Nel 2012 The Walt Disney Company acquistò infine i diritti della serie e avviò la produzione di una trilogia sequel con Il risveglio della Forza (2015), Gli ultimi Jedi (2017) e L'ascesa di Skywalker (2019). Essa è stata alternata a una serie Anthology che include Rogue One: A Star Wars Story (2016) e Solo: A Star Wars Story (2018). ",
            'category'=>"Film",
            'img'=>'/img/5.jpg'
        ],
        [
            'id'=>6,
            'title'=>"New Videogame Horror",
            'subtitle'=>"Troppo figo",
            'body'=>"The Last of Us è un videogioco action-adventure del 2013, sviluppato da Naughty Dog e pubblicato da Sony Interactive Entertainment per PlayStation 3, PlayStation 4 e PlayStation 5.Con ben 256 premi è uno dei videogiochi più premiati[1] ed è considerato da gran parte della critica videoludica uno dei migliori videogiochi di tutti i tempi.[2][3][4][5][6][7][8][9][10][4] È stato annunciato il 10 dicembre 2011 durante gli Spike Video Game Awards[11][12]. Il gioco si è dimostrato il migliore durante l'Electronic Entertainment Expo 2012, aggiudicandosi 5 premi, tra cui il premio per la miglior presentazione, per il miglior gioco per console e per il miglior gioco originale[13]. ",
            'category'=>"Videogame",
            'img'=>'/img/6.jpg'
        ]

        ];

    public function showLastestArticles() {

        $this->articles;
        return view('home',['articles'=> array_slice($this->articles,0,3)]);
    }

    public function showAllArticles() {

        $this->articles;
        return view('blog',['articles'=>$this->articles]);
    }

    public function showByIndex($id){
        foreach($this->articles as $article){
            if ($article['id'] == $id) {
                return view('show', ['article' => $article]);
            }else{
                return abort(404);
            }
        }
    }
}
