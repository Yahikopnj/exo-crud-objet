<?php 
namespace App\model;
use App\model\DAO;
use \PDOexception;

require_once("../autoloader.php");
class Equipment{
    private $name_equipment;
    private $type_equipment;
    private $quantity_equipment;
    private $status_equipment;
    private $admin;

    function __construct($name_equipment, $type_equipment, $quantity_equipment, $status_equipment, $admin)
    {
        $this->name_equipment = $name_equipment;
        $this->type_equipment = $type_equipment;
        $this->quantity_equipment = (int)$quantity_equipment;
        $this->status_equipment = $status_equipment;
        $this->admin = $admin;
    }

    public function getname_equipment(){
    return $this-> name_equipment;
    }

    public function setname_equipment($name_equipment){
        $this->name_equipment = $name_equipment;
    }

    public function gettype_equipment(){
        return $this->type_equipment;
    }

    public function settype_equipment($type_equipment){
        $this->type_equipment = $type_equipment;
    }

    public function getquantity_equipment(){
        return $this->quantity_equipment;
    }
    public function setquantity_equipment($quantity_equipment){
        $this->quantity_equipment = $quantity_equipment;
    }
    public function getstatus_equipment(){
        return $this->status_equipment;
    }
    public function setstatus_equipment($status_equipment){
        $this->status_equipment = $status_equipment;
    }

    public function getadmin (){
        return $this->admin;
    }
    public function setadmin ($admin){
        $this->admin = $admin;
    }
    public function insert(){
        try{
          
            $dao = new DAO();
            $dbh = $dao->getDbh();

           $stmt =  $dbh->prepare("INSERT INTO `equipment` (`name_equipment`, `type_equipment`, `quantity_equipment`, `status_equipment`,`admin`)
           VALUES (?, ?, ?, ?, ?)");
            $stmt->bindValue(1,$this->name_equipment);
            $stmt->bindValue(2,$this->type_equipment);
            $stmt->bindValue(3,$this->quantity_equipment);
            $stmt->bindValue(4,$this->status_equipment);
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

           $stmt =  $dbh->query("SELECT * FROM `equipment`");
          
           
           return $stmt->fetchAll();

        }catch(PDOException $erreur){
            echo $erreur->getMessage();
        }
       
    }


    public static function findById($id_equipment){
        try{
          
            $dao = new DAO();
            $dbh = $dao->getDbh();

          $stmt = $dbh->prepare("SELECT * FROM `equipment` WHERE id_equipment=?");
          $stmt->bindParam(1,$id_equipment);
          $stmt->execute();

          return $stmt->fetch();

        }catch(PDOException $erreur){
            echo $erreur->getMessage();
        }  
    }

    public function update($id_equipment){
        try{
        $dao = new DAO();
        $dbh = $dao->getDbh();

       $stmt =  $dbh->prepare("UPDATE `equipment` SET `name_equipment`=?, `type_equipment`=?, `quantity_equipment`=?, `status_equipment`=? WHERE id_equipment=?");
       $stmt->bindValue(1,$this->name_equipment);
       $stmt->bindValue(2,$this->type_equipment);
       $stmt->bindValue(3,$this->quantity_equipment);
       $stmt->bindValue(4,$this->status_equipment);
       $stmt->bindValue(5,$id_equipment);

        $stmt->execute();
    }catch(PDOException $erreur){
        echo $erreur->getMessage();
    }
    }

    public static function deleteById($id_equipment){
        try{
            $dao = new DAO();
            $dbh = $dao->getDbh();
    
           $stmt =  $dbh->prepare("DELETE FROM `equipment` WHERE id_equipment=?");
           $stmt->bindValue(1,$id_equipment);
    
            $stmt->execute();
        }catch(PDOException $erreur){
            echo $erreur->getMessage();
        }
    }

}
?>