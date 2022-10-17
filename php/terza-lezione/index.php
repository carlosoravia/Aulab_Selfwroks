<?php
// - Applicando quello visto a lezione riprodurre uno Zoo in OOP (Object Oriented Programming)
// - creare una classe Animale generica 
// - Creare N classi (Almeno 5) di animali reali che specializzano la classe animale, utilizzando anche i metodi self per il conteggio



// trait Geox{
//     public function respira(){
//         echo "MO RESPIRO DI BRUTTO";
//     }
// }




abstract class Animale{
    // use Geox;
    public $specie;
    public $habitat;
    public $alimentazione;
    
    abstract function parla(); 
    public function __construct($specie, $habitat, $alimentazione){

        $this->specie = $specie;
        $this->habitat = $habitat;
        $this->alimentazione = $alimentazione;
        
    }

};




class Cane extends Animale{
    public $zampe;
    public $pelo;
    public static $counter = 0;
    public function __construct($specie, $habitat, $alimentazione, $zampe, $pelo){

        parent:: __construct($specie, $habitat, $alimentazione);
        $this->zampe = $zampe;
        $this->pelo = $pelo;
        self:: $counter++;
    }
    public function parla(){
        echo "abbaio ma mordo \n"; 
    } 
}


class Pesce extends Animale{
    public $motore;
    public $respirazione;
    public static $counter = 0;
    public function __construct($specie, $habitat, $alimentazione, $pinne, $branchie){

        parent:: __construct($specie, $habitat, $alimentazione);
        $this->motore = $pinne;
        $this->respirazione = $branchie;
        self:: $counter++;
    // this richiama ciò che ho scritto sopra e devo usare lo stesso nome
    }
    public function parla(){
        echo "blub blub \n"; 
    } 
}

class Leone extends Animale{
    protected $zampe;
    private $pelo;
    public static $counter = 0;
    public function __construct($specie, $habitat, $alimentazione, $zampe, $pelo){

        parent:: __construct($specie, $habitat, $alimentazione);
        $this->zampe = $zampe;
        $this->pelo = $pelo;
        self:: $counter++;
    }
    public function parla(){
        echo "VAFFANCULO ARRRRRRRRH \n"; 
    } 
}

$firstLeon = new Leone ("felino", "savana", "carnivoro", 4, "criniera");

$firstDoggo = new Cane("canide", "ovunque", "onnivoro", 4, "pelo lungo/corto");
// $firstDoggo->abbaia();


$firstFish = new Pesce("trota", "acqua dolce", "onnivoro", "pinne", "branchie");


var_dump($firstLeon);
$firstLeon->parla();


?>