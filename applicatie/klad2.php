<?php
// session start
session_start();

// session start
if(isset($_GET['action']) && $_GET['action'] == "logout"){
    session_destroy();
    header('location: klad2.php');
}

// gebruikersnaam en wachtwoord invullen
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['cmdLogin'])){
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    if($username == "floris" && $password == "1234"){
        //combinatie klopt
        echo"Je bent nu ingelogd, welkom op de website";
        $_SESSION['ingelogd'] = 1;
        $_SESSION['username'] = $username;

    } else{
        // combinatie klopt niet
        echo"verkeerd wachtwoord, probeer het nog een keer";
    }
}
// checken of gebruiker ingelog is
function checkLogin(){
    $ingelogd = false;
    if(isset($_SESSION['ingelogd']) && $_SESSION['ingelogd'] == 1){
        $ingelogd = true;
    } return $ingelogd;
}
?>

<!-- HTML -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="normalize.css" rel = "stylesheet" type = "text/css">
        <link href="klad.css" rel = "stylesheet" type = "text/css">
        <title>Testomgeving</title>
    </head>
    <body>
        <br><br>
        <form action="klad2.php" method="POST">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="password">
            <input type="submit" name="cmdLogin" value="login">
        </form>
    
    <br>
    <?php    
        //
        if(checkLogin())
        {
            echo '<a href="klad2.php?action=logout">Klik hier om uit te loggen</a>';
        } else {
            echo "Log in door je inloggegevens hierboven in te vullen";
        }
         
    ?>
    <h5>Inloggegevens zijn: floris - 1234</h5><br><br><br><br>



    <h3>nieuw testvlak:</h3>
<table>
    <tr>
        <td>Username:</td>
        <td><form action="klad2.php" method="POST">
                <input type="text" name="gebruikersnaam" placeholder="gebruikersnaam">
            </form>
        </td>
        <td>Password:</td>
        <td><form action="klad2.php" method="POST">
            <input type="password" name="wachtwoord" placeholder="wachtwoord">
        </form>
        </td>  
        
        <td>Submit: <form action="klad2.php" method="POST">
            <input type="submit" name="verstuur " value="login">
        </form></td>
    </tr>
</table>

<?php
   echo date("l jS \of F Y h:i:s A") . "<br>";
?>

    </body>
</html>

