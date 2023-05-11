<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../Controller/Router.php?equipment=update" method="post">
    <input type="hidden" name="id_equipment" id="id_equipment" value="<?= $equipment["id_equipment"];?>">

    <label for="name_equipment">nom de l'equipement</label>
        <input type="text" name="name_equipment" id="name_equipment" value="<?= $equipment["name_equipment"]; ?>">>

        <label for="type_equipment">type d'equipement</label>
        <input type="text" name="type_equipment" id="type_equipment" value="<?= $equipment["type_equipment"]; ?>">>

        <label for="quantity_equipment">quantite d'equipement</label>
        <input type="number" name="quantity_equipment" id="type_equipment" value="<?= $equipment["quantity_equipment"]; ?>">>

        <select name="status_equipment" id="status_equipment" value="<?= $equipment["status_equipment"]; ?>">>
            <option disabled value="1">etat de l'equipement</option>
            <option >bon etat</option>
            <option >etat usé</option>
            <option >etat neuf</option>
        </select>

        <input type="submit" name="submit" value="Modifier">

    </form>

</body>
</html>