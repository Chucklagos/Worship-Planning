<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="user" id="user" placeholder="ingrese el tipo de usuario">
        <input type="submit" value="Iniciar sesion">
    </form>

    <?php
    session_start();
    #error_reporting(0);
        if ($_POST['user']=="admin") {
            header ("location:src/adminPanel.php");
        } else { ?>
        <script>alert("Hasta el momento solo esta disponible el usuario admin")</script>
       <?php } ?>
    

</body>
</html>