<?php
// session start
session_start();

// session start
if(isset($_GET['action']) && $_GET['action'] == "logout"){
    session_destroy();
    header('location: inloggen.php');
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
        <link href="normalize.css" rel= "stylesheet" type= "text/css">
        <link href="index.css" rel= "stylesheet" type= "text/css">
        <title>Fletnix</title>
    </head>
    <body>

    <nav>
            <ul>
              <li><a href="index.php"><img src="img/fletnix.png" alt="fLeTnIx" width="75" height="30"></a></li>
              <li><a href="wieKijktEr.php">Profiel</a></li>
              <li><a href="filmAanbod.php">Filmaanbod</a></li>
              <li><a href="inloggen.php">Inloggen</a></li>
              <li><a href="registreren.php">Registreren</a></li>
              <li><a href="credits.php">Credits</a></li>
              <li><a href="contacts.php">Contact</a></li>
              <li><a href="AVG.php">AVG</a></li>
            </ul>
          </nav>
    
    <br>
    <a>Tip: Inloggegevens zijn: floris - 1234</a><br><br><br><br>
    <?php    
        //
        if(checkLogin())
        {
            echo '<a href="inloggen.php?action=logout">Klik hier om uit te loggen</a>';
        } else {
            echo "Log in door je inloggegevens hierboven in te vullen";
        }
         
    ?>



    <main class="main">
            <div class="Text_center"><h1>Inloggegevens</h1></div>
                <div class="TextCenter">
                    <form action="inloggen.php" method="POST">       
                        <input type="text" name="username" id="username" placeholder="Username"><br><br>
                        <input type="password" name="password" id="password" placeholder="Password"><br><br>
                        <input type="submit" value="Submit">
                    </form>
                </div>
        </main>        
    </body>
</html>





  
