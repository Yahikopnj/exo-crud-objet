<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../Controller/Router.php?route=update" method="post">
        <input type="hidden" name="id_register" id="id_register" value="<?= $register["id_register"]; ?>">

        <div class="divForm">
            <label for="lastname">lastname</label>
            <input type="text" name="lastname" id="lastname" value="<?= $register["lastname"]; ?>">
        </div>

        <div class="divForm">
            <label for="firstname">firstname</label>
            <input type="text" name="firstname" id="firstname" value="<?= $register["firstname"]; ?>">
        </div>

        <div class="divForm">
            <label for="mail">mail</label>
            <input type="mail" name="mail" id="mail" required value="<?= $register["mail"]; ?>">
        </div>

        <div class="divForm">
            <label for="password">password</label>
            <input type="password" name="password" id="password" required value="<?= $register["password"]; ?>">
        </div>

        <div class="divForm">
            <label for="birthday">age</label>
            <input type="number" name="birthday" id="birthday" required value="<?= $register["birthday"]; ?>">
        </div>

        <div class="divForm">
            <input type="submit" name="submit" value="Modifier">
        </div>
    </form>
</body>

</html>