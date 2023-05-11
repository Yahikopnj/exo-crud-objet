<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($deliverys as $delivery): ?>
        <ul>
        <li><?=$delivery["address"]?></li>
        <li><?=$delivery["zip"]?></li>
        <li><?=$delivery["city"]?></li>
        <li><?=$delivery["name_client"]?></li>
    </ul>
    <a href="../Controller/Router.php?delivery=read&id_delivery=<?=$delivery["id_delivery"]?>">Voir details</a>
        <a href="../Controller/Router.php?delivery=formUpdate&id_delivery=<?=$delivery["id_delivery"]?>">Modif</a>
        <a href="../Controller/Router.php?delivery=delete&id_delivery=<?=$delivery["id_delivery"]?>">Supprimer</a>
    <?php endforeach;?>


    
</body>
</html>