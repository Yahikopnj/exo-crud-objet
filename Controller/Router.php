<?php
use App\Controller\RegisterController;
use App\Controller\EquipmentController;
use App\Controller\DeliveryController;

require_once("../autoloader.php");

if(isset($_GET["route"])){

    if($_GET["route"] == "all"){
        RegisterController::all();
    }else if($_GET["route"]=="read"){
        RegisterController::readById($_GET["id_register"]);
    }else if($_GET["route"] == "create"){ 
        RegisterController::create($_POST);
    }else if($_GET["route"] == "update"){
        RegisterController::modif($_POST);
    }else if($_GET["route"] == "formUpdate"){
        RegisterController::formUpdate($_GET["id_register"]);
    }elseif($_GET["route"] == "delete"){
        RegisterController::delete($_GET["id_register"]);
    }
}
        if(isset($_GET["equipment"])){

    if($_GET["equipment"] == "all"){
        EquipmentController::all();
    }else if($_GET["equipment"]=="read"){
        EquipmentController::readById($_GET["id_equipment"]);
    }else if($_GET["equipment"] == "create"){ 
        EquipmentController::create($_POST);
    }else if($_GET["equipment"] == "update"){
        EquipmentController::modif($_POST);
    }else if($_GET["equipment"] == "formUpdate"){
        EquipmentController::formUpdate($_GET["id_equipment"]);
    }elseif($_GET["equipment"] == "delete"){
        EquipmentController::delete($_GET["id_equipment"]);
    }
}

if(isset($_GET["delivery"])){

    if($_GET["delivery"] == "all"){
        DeliveryController::all();
    }else if($_GET["delivery"]=="read"){
        DeliveryController::readById($_GET["id_delivery"]);
    }else if($_GET["delivery"] == "create"){ 
        DeliveryController::create($_POST);
    }else if($_GET["delivery"] == "update"){
        DeliveryController::modif($_POST);
    }else if($_GET["delivery"] == "formUpdate"){
        DeliveryController::formUpdate($_GET["id_delivery"]);
    }elseif($_GET["delivery"] == "delete"){
        DeliveryController::delete($_GET["id_delivery"]);
    }
}
?>