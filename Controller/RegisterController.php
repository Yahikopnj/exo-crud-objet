<?php
namespace App\Controller;
use App\model\Register;
require("../autoloader.php");
class RegisterController{


public static function all(){
    $registers = Register::findAll();
    require("../View/ReadAllRegister.php");
}

public static function readById($id_register){
    $register = Register::findById($id_register);
    require("../View/ReadRegister.php");
}

public  static function create($post){

    
   $register=  new Register($post["lastname"], $post["firstname"], $post["mail"], $post["password"], $post["birthday"],false);
   $register->insert();


   self::all();
}

public static function modif($post){
    $register=  new Register($post["lastname"], $post["firstname"], $post["mail"], $post["password"], $post["birthday"],false);
    $register->update($post["id_register"]);
    self::all();
}

public static function formUpdate($id_register){
    $register = Register::findById($id_register);
    require("../View/formUpdateRegister.php");
}

public static function delete($id_register){
    $register = Register::deleteById($id_register);
    self::all();
}


}

?>





