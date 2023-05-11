<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../Controller/Router.php?delivery=create" method="post">

        <label for="address">entrez votre adresse</label>
        <input type="text" name="address" id="address">

        <label for="zip">code postal</label>
        <input type="number" name="zip" id="zip">

        <label for="city">votre ville</label>
        <input type="text" name="city" id="city">

<label for="name_client">Entrez votre nom</label>
<input type="text" name="name_client" id="name_client">


        <label for="rgpd"> Je suis d'accord avec les CGV</label>
        <input type="checkbox" name="rgpd" id="rgpd" required>

        <input type="submit" name="submit" value="Envoyer">



    </form>


</body>

</html>