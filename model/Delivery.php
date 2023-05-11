<?php 

namespace App\model;
use App\model\DAO;
use \PDOException;

require_once("../autoloader.php");

class Delivery{
    private $address;
    private $zip;
    private $city;
    private $name_client;
    private $admin;

    function __construct($address, $zip, $city, $name_client, $admin){
        $this->address = $address;
        $this->zip = $zip;
        $this->city = $city;
        $this->name_client = $name_client;
        $this->admin = $admin;

    }

    public function getAddress(){
        return $this-> address;
    }

    public function setAddress($address){
        $this->address = $address;
    }

    public function getZip(){
        return $this-> zip;
    }

    public function setZip($zip){
        $this->zip = $zip;
    }

        public function getCity(){
        return $this-> city;
    }

    public function setCity($city){
        $this->city = $city;
    }

    public function getName_client(){
        return $this-> name_client;
    }

    public function setName_client($name_client){
        $this->name_client = $name_client;
    }

    public function getAdmin(){
        return $this-> admin;
    }

    public function setAdmin($admin){
        $this->admin = $admin;
    }

    public function insert(){
        try{
            $dao = new DAO();
            $dbh = $dao->getDbh();

            $stmt = $dbh->prepare("INSERT INTO delivery (`address`, zip, city, name_client, `admin`)
            VALUES(?, ?, ?, ?, ?)");

            $stmt->bindValue(1, $this->address);
            $stmt->bindValue(2,$this->zip);
            $stmt->bindValue(3,$this->city);
            $stmt->bindValue(4,$this->name_client);
            $stmt->bindValue(5,$this->admin);

            $stmt->execute();
        }catch(PDOException $erreur){
            echo $erreur->getMessage();
        }
    }

    public static function findAll(){
        try{
            $dao = new DAO();
            $dbh = $dao->getDbh();

            $stmt = $dbh->query("SELECT * FROM delivery");

            return $stmt->fetchAll();
        }catch(PDOException $erreur){
            echo $erreur->getMessage();
        }
    }

    public static function findById($id_delivery){
        try{
            $dao = new DAO();
            $dbh = $dao->getDbh();

          $stmt = $dbh->prepare("SELECT * FROM delivery WHERE id_delivery=?");
          $stmt->bindParam(1,$id_delivery);
          $stmt->execute();

          return $stmt->fetch();

        }catch(PDOException $erreur){
            echo $erreur->getMessage();
        } 
    }

    public function update($id_delivery){
        try{
        $dao = new DAO();
        $dbh = $dao->getDbh();

       $stmt =  $dbh->prepare("UPDATE delivery SET `address`=?, zip =?, city=?, name_client=? WHERE id_delivery=?");
       $stmt->bindValue(1,$this->address);
       $stmt->bindValue(2,$this->zip);
       $stmt->bindValue(3,$this->city);
       $stmt->bindValue(4,$this->name_client);
       $stmt->bindValue(5,$id_delivery);

        $stmt->execute();
    }catch(PDOException $erreur){
        echo $erreur->getMessage();
    }
    }

    public static function deleteById($id_delivery){
        try{
            $dao = new DAO();
            $dbh = $dao->getDbh();
    
           $stmt =  $dbh->prepare("DELETE FROM delivery WHERE id_delivery=?");
           $stmt->bindValue(1,$id_delivery);
    
            $stmt->execute();
        }catch(PDOException $erreur){
            echo $erreur->getMessage();
        }
    }
}


?>