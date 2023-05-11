<?php 

namespace App\model;
use App\model\DAO;
use \PDOException;

require_once("../autoloader.php");

class Honeypot{
    private $name_honey;
    private $type_honey;
    private $quantity_pot;
    private $price;
    private $number_available;
    private $type_bee;
    private $quantity_honey;

    function __construct($name_honey, $type_honey, $quantity_pot, $price, $number_available, $type_bee, $quantity_honey){
        $this->name_honey = $name_honey;
        $this->type_honey = $type_honey;
        $this->quantity_pot = $quantity_pot;
        $this->price = $price;
        $this->number_available = $number_available;
        $this->type_bee = $type_bee;
        $this-> quantity_honey = $quantity_honey;

    }
    
    public function getName_honey(){
        return $this->name_honey;
    }

    public function setName_honey($name_honey){
$this->name_honey = $name_honey;
    }


    public function getType_honey(){
        return $this->type_honey;
    }

    public function setType_honey($type_honey){
$this->type_honey = $type_honey;
    }
    public function getquantity_pot(){
        return $this->quantity_pot;
    }

    public function setquantity_pot($quantity_pot){
$this->quantity_pot = $quantity_pot;
    }
    public function getprice(){
        return $this->price;
    }

    public function setprice($price){
$this->price = $price;
    }
    public function getNumber_available(){
        return $this->number_available;
    }

    public function setNumber_available($number_available){
$this->number_available = $number_available;
    }
    public function gettype_bee(){
        return $this->type_bee;
    }

    public function settype_bee($type_bee){
$this->type_bee = $type_bee;
    }
}


?>