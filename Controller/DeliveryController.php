<?php
namespace App\Controller;
use App\model\Delivery;

class DeliveryController{
    public static function all(){
$deliverys = Delivery::findAll();
require("../View/ReadAllDelivery.php");
    }
    public static function readById($id_delivery){
        $delivery = Delivery::findById($id_delivery);
        require("../View/ReadDelivery.php");
    }

    public static function create($post){
        $delivery = new Delivery($post["address"], $post["zip"], $post["city"], $post["name_client"], false);
        $delivery->insert();
        self::all();
    }

    public static function modif($post){
        $delivery = new Delivery($post["address"], $post["zip"], $post["city"], $post["name_client"], false);
        $delivery->update($post["id_delivery"]);
        self::all();
    }

    public static function formUpdate($id_delivery){
        $delivery = Delivery::findById($id_delivery);
        require("../View/formUpdateDelivery.php");
    }
    public static function delete($id_delivery){
        $delivery = Delivery::deleteById($id_delivery);
        self::all();
    }
}


?>