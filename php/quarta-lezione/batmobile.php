<?php 
//CREARE UNA BATMOBILE DIVISA IN DUE PARTI: PARTE ANTERIORE E PARTE INFERIORE
//PARTE ANTERIORE SI OCCUPERA' DELL'ATTACCO
//PARTE POSTERIORE SI OCCUPERA'DELLA DIFESA


// dichiarata astratta parte interiore



abstract class ParteAnteriore {
    public $ammunition = 5;
    abstract public function attack();
}


//creo classe Sparacazzi
class SparaCazzi extends ParteAnteriore{
    
    public function attack(){
        $this-> ammunition --;
        echo"tieni sto cazzo! totale: " . $this ->ammunition  ."\n";
    }
}


//creo classe Mitra
class Mitra extends ParteAnteriore{
    public function attack(){
        echo"Ciao sono Damiano dei Maneskin!";
    }
}






// dichiarata astratta parte posteriore
abstract class PartePosteriore {
    abstract public function defense();
}

//creo classe emp
class Emp extends PartePosteriore{
    public function defense(){
        echo"mi sto difendendo, viva l'impulso!";
    }
}

class Olio extends PartePosteriore{
    public function defense(){
        echo"Friggo i polli!";
    }
}






//creo batmobile

class Batmobile{
    public $attacco;
    public $difesa;
    
    

    public function __construct($attacco,$difesa){
        $this->attacco = $attacco;
        $this->difesa = $difesa;
        
    }
    //funzioni per azioni 
    public function batmobile_attacca(){
        
        for ($i=0; $i < 5; $i++) { 
            if ($this->attacco->ammunition > 1){
                $this-> attacco->attack();
            }else {   
                echo"hai finito le munizioni \n";
                
            }
        }
        
        
    }
    public function batmobile_difendi(){
        $this-> difesa->defense();
    }

}

//creo il metodo



$batmobile1 = new Batmobile(new SparaCazzi, new Olio);
//
$batmobile1->batmobile_attacca();
// $batmobile1->batmobile_difendi();
// $batmobile1->batmobile_difendi();

?>

