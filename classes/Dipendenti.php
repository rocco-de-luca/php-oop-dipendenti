<?php

class Employee {
    public $fresher;
    public $name;
    public $surname;
    public $birthPlace;
    public $dateOfBirth;
    public $residance;
    public function __construct($_fresher, $_name, $_surname, $_birthPlace, $_dateOfBirth, $_residance){
        $this->fresher = $_fresher;
        $this->name = $_name;
        $this->surname = $_surname;
        $this->birthPlace = $_birthPlace;
        $this->dateOfBirth = $_dateOfBirth;
        $this->residance = $_residance;
    }
public function visualizza_Dipendenti()
{
    $result = ['Name'=>$this->name,];
}
}

class Worker extends Employee
{
    public $notturno;
    function __construct($_matricola, $_nome, $_cognome, $_luogoNascita, $_dataNascita, $_residenza, $_notturno){
        parent::__construct($_matricola, $_nome, $_cognome, $_luogoNascita, $_dataNascita, $_residenza);
        $this->notturno = $_notturno;
    }
}

class Manager extends Employee{
    public $num;
    public function setNum($num) {
        if(! is_int($num)){
            throw new Exception('is not a number');
        }
        else{
            $this->num = $num;
        }
    }
}