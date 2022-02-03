<?php

if(isset($_GET['GENRE'])) {
    $GENRE = $_GET['GENRE'];
}

if(isset($_POST['acteur'])) {
    $acteur = $_POST['acteur'];    
}

if(isset($_POST['loginnaam'])){
    $username = $_POST['loginnaam'];
    $password = $_POST['password'];
}

echo "<pre>";
print_r($_POST);
echo "</pre>";

echo "Ingevulde username =" . $username . "<br>";
echo "Ingevulde wachtwoord =" . $password . "<br><br>";


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index</title>
    </head>
    <body>
        <h1>PHP</h1>
    <form action="" method="POST">
        <input type="text" name="loginnaam" id="loginnaam" placeholder="loginnaam"> 
        <input type="password" name="password" id="password" placeholder="password">
        <input type="submit" name="verstuur" value="login">
    </form>
   
   
   
    </body>
</html>
