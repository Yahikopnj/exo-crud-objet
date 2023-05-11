<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($registers as $register): ?>
        <ul>
            <li><?= $register["lastname"]?></li>
            <li><?= $register["firstname"]?></li>
            <li><?= $register["mail"]?></li>
            <li><?= $register["birthday"]?></li>
            <li><?= $register["password"]?></li>
        </ul>
        <a href="../Controller/Router.php?route=read&id_register=<?=$register["id_register"]?>">Voir details</a>
        <a href="../Controller/Router.php?route=formUpdate&id_register=<?=$register["id_register"]?>">Modif</a>
        <a href="../Controller/Router.php?route=delete&id_register=<?=$register["id_register"]?>">Supprimer</a>
    <?php endforeach;?>
</body>
</html>
