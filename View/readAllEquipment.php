<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($equipments as $equipment): ?>
        <ul>
        <li><?=$equipment["name_equipment"]?></li>
        <li><?=$equipment["type_equipment"]?></li>
        <li><?=$equipment["quantity_equipment"]?></li>
        <li><?=$equipment["status_equipment"]?></li>
    </ul>
    <a href="../Controller/Router.php?equipment=read&id_equipment=<?=$equipment["id_equipment"]?>">Voir details</a>
        <a href="../Controller/Router.php?equipment=formUpdate&id_equipment=<?=$equipment["id_equipment"]?>">Modif</a>
        <a href="../Controller/Router.php?equipment=delete&id_equipment=<?=$equipment["id_equipment"]?>">Supprimer</a>
    <?php endforeach;?>


    
</body>
</html>