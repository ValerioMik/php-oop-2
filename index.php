<!-- /**
     * 
     *      Definire classe Persona:
     *          - ATTRIBUTI (private):
     *              - nome
     *              - cognome
     *              - dataNascita (stringa)
     *          - METODI:
     *              - costruttore che accetta nome e cognome
     *              - setter/getter per ogni variabile
     *              - printFullPerson: che stampa "nome cognome: dataNascita"
     *              - toString: che ritorna "nome cognome: dataNascita"
     * 
     * 
     *      Definire classe Employee che eredita da Persona:
     *          - ATTRIBUTI (private):
     *              - stipendio
     *              - dataAssunzione
     *          - METODI:
     *              - costruttore che accetta nome, cognome e stipendio
     *              - setter/getter per variabili 
     *              - printFullEmployee: che stampa "nome cognome: stipendio (dataAssunzione)"
     *              - toString: che ritorna "nome cognome: stipendio (dataAssunzione)"
     * 
     */ -->


     <?php

    class persona{

        private $nome;
        private $cognome;
        private $dataNascita;

        public function __construct($nome,$cognome){
            $this->setNome($nome);
            $this->setCognome($cognome);
        }

        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            return $this->nome = $nome;
        }

        public function getCognome(){
            return $this->cognome;
        }
        public function setCognome($cognome){
            return $this->cognome = $cognome;
        }

        public function getData(){
            return $this->dataNascita;
        }
        public function setData($dataNascita){
            return $this->dataNascita = $dataNascita;
        }

        public function printFullPerson(){
            return $this->getNome()." ".$this->getCognome().", assunto il : ".$this->getData()."<br>";
        }
        public function __toString(){
            return $this->printFullPerson();
        }
    }
   
    class Employee extends persona {
        private $stipendio;
        private $dataAssunzione;

        public function __construct($nome,$cognome,$stipendio){
            parent::__construct($nome,$cognome);
            $this->setStipendio($stipendio);
        }

        public function getStipendio(){
            return $this->stipendio;
        }
        public function setStipendio($stipendio){
            return $this->stipendio = $stipendio;
        }

        public function getdataAssunzione(){
            return $this->dataAssunzione;
        }
        public function setdataAssunzione($dataAssunzione){
            return $this->dataAssunzione = $dataAssunzione;
        }
        public function printFullEmployee(){
            return $this->getNome()." ".$this->getCognome().", stipendio di : ".$this->getStipendio().", assunto il: ".$this->getdataAssunzione();
        }

        public function __toString(){
            return $this->printFullEmployee();
        }
    }

    $ps1 = new persona ("Marco","Antonione");
    $ps1-> setData("19/12/1991");
    echo $ps1-> __toString()."<br>"; 

    $ps2 = new Employee("Piero","Bullone",$stipendio);
    $ps2-> setdataAssunzione("14/10/2022");
    $ps2-> setStipendio("2500$");

    echo $ps2->__toString()."<br>";
  
     ?>