<?php 
namespace App\Controller;
use App\model\Equipment;
require("../autoloader.php");
class EquipmentController{

    public static function all(){
        $equipments = Equipment::findAll();
        require("../View/readAllEquipment.php");
    }

    public static function readById($id_equipment){
        $equipment = Equipment::findById($id_equipment);
        require("../View/readEquipment.php");
    }

    public static function create($post){
        $equipment= new Equipment($post["name_equipment"], $post["type_equipment"], $post["quantity_equipment"], $post["status_equipment"], false);
        $equipment->insert();
        self::all();
    }

    public static function modif($post){
        $equipment= new Equipment($post["name_equipment"], $post["type_equipment"], $post["quantity_equipment"], $post["status_equipment"], false);
        $equipment->update($post["id_equipment"]);
        self::all();
    }
    public static function formUpdate($id_equipment){
        $equipment = Equipment::findById($id_equipment);
        require("../View/formUpdateEquipment.php");
    }

    public static function delete($id_equipment){
        $equipment = Equipment::deleteById($id_equipment);
        self::all();
    }
}












?>