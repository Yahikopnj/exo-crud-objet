<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../Controller/Router.php?Honey_pot=create" method="post">

        <label for="name_honey">nom du pot</label>
        <input type="text" name="name_honey" id="name_honey">

        <label for="type_honey">type de miel</label>
        <input type="text" name="type_honey" id="type_honey">

        <label for="quantity_pot">quantité de pots</label>
        <input type="number" name="quantity_pot" id="quantity_pot">

<label for="price">prix du pot</label>
<input type="number" name="price" id="price">

<label for="number_available">nombre de pots disponible</label>
        <input type="number" name="number_available" id="number_available">

        <label for="type_bee">type d'abeille</label>
        <input type="text" name="type_bee" id="type_bee">

        <label for="quantity_honey">quantité de miel</label>
        <input type="number" name="quantity_honey" id="quantity_honey">

        <label for="rgpd"> Je suis d'accord avec les CGV</label>
        <input type="checkbox" name="rgpd" id="rgpd" required>

        <input type="submit" name="submit" value="Envoyer">



    </form>


</body>

</html>