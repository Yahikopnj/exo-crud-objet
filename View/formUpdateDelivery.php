<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../Controller/Router.php?delivery=update" method="post">
    <input type="hidden" name="id_delivery" id="id_delivery" value="<?= $delivery["id_delivery"];?>">

    <label for="address">nom de l'equipement</label>
        <input type="text" name="address" id="address" value="<?= $delivery["address"]; ?>">

        <label for="zip">type d'equipement</label>
        <input type="number" name="zip" id="zip" value="<?= $delivery["zip"]; ?>">

        <label for="city">quantite d'equipement</label>
        <input type="text" name="city" id="city" value="<?= $delivery["city"]; ?>">
        
        <label for="name_client"> votre nom</label>
        <input type="text" name="name_client" id="name_client" value="<?= $delivery["name_client"]; ?>">


        <input type="submit" name="submit" value="Modifier">

    </form>

</body>
</html>