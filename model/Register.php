<?php
namespace App\model;
use App\model\DAO;
use \PDOException;

require_once("../autoloader.php");
class Register{
    private $lastname;
    private $firstname;
    private $mail;
    private $password;
    private $birthday;

    private $admin;


    function __construct($param1, $param2, $param3,$param4,$param5,$param6){

        $this->lastname = $param1;
        $this->firstname = $param2;
        $this->mail = $param3;
        $this->password = $param4;
        $this->birthday = $param5;
        $this->admin = $param6;
    }
   


    public function getLastname()
    {
        return $this->lastname;
    }

   
    public function setLastname($lastname)
    {
        
        $this->lastname = $lastname;

    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

    }

    
    public function getEmail()
    {
        return $this->mail;
    }

    
    public function setEmail($mail)
    {
        $this->mail = $mail;
    }

     
    public function getPassword()
    {
        return $this->password;
    }

   
    public function setPassword($password)
    {  
        $this->password = $password;
    }

    /**
     * Get the value of birthday
     */ 
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set the value of birthday
     *
     * @return  self
     */ 
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get the value of admin
     */ 
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * Set the value of admin
     *
     * @return  self
     */ 
    public function setAdmin($admin)
    {
        $this->admin = $admin;

        return $this;
    }

    public function insert(){
        try{
          
            $dao = new DAO();
            $dbh = $dao->getDbh();

           $stmt =  $dbh->prepare("INSERT INTO `register` (`lastname`, `firstname`, `mail`, `password`, `birthday`, `admin`)
           VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bindValue(1,$this->lastname);
            $stmt->bindValue(2,$this->firstname);
            $stmt->bindValue(3,$this->mail);
            $stmt->bindValue(4,$this->password);
            $stmt->bindValue(5,$this->birthday);
            $stmt->bindValue(6,$this->admin);

            $stmt->execute();


        }catch(PDOException $erreur){
            echo $erreur->getMessage();
        }
    }

    public static function findAll(){
 
        try{
          
            $dao = new DAO();
            $dbh = $dao->getDbh();

           $stmt =  $dbh->query("SELECT * FROM `register`");
          
           
           return $stmt->fetchAll();

        }catch(PDOException $erreur){
            echo $erreur->getMessage();
        }
       
    }


    public static function findById($id_register){
        try{
          
            $dao = new DAO();
            $dbh = $dao->getDbh();

          $stmt = $dbh->prepare("SELECT * FROM `register` WHERE id_register=?");
          $stmt->bindParam(1,$id_register);
          $stmt->execute();

          return $stmt->fetch();

        }catch(PDOException $erreur){
            echo $erreur->getMessage();
        }  
    }

    public function update($id_register){
        try{
        $dao = new DAO();
        $dbh = $dao->getDbh();

       $stmt =  $dbh->prepare("UPDATE `Register` SET `lastname`=?, `firstname`=?, `mail`=?, `password`=?, `birthday`=? WHERE id_register=?");
       $stmt->bindValue(1,$this->lastname);
       $stmt->bindValue(2,$this->firstname);
       $stmt->bindValue(3,$this->mail);
       $stmt->bindValue(4,$this->password);
       $stmt->bindValue(5,$this->birthday);
       $stmt->bindValue(6,$id_register);

        $stmt->execute();
    }catch(PDOException $erreur){
        echo $erreur->getMessage();
    }
    }

    public static function deleteById($id_register){
        try{
            $dao = new DAO();
            $dbh = $dao->getDbh();
    
           $stmt =  $dbh->prepare("DELETE FROM `register` WHERE id_register=?");
           $stmt->bindValue(1,$id_register);
    
            $stmt->execute();
        }catch(PDOException $erreur){
            echo $erreur->getMessage();
        }
    }

}



?>