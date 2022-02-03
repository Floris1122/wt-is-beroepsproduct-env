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

        <main>
            <div class="TextCenter">
                <p>Vul hieronder je gegevens in:</p>
                <form action="registreren.php" method="POST">     
                    <input type="text" name="email" id="email" placeholder="Email">
                    <input type="text" name="password" id="password" placeholder="Password"><br><br>
                    <input type="text" name="firstname" id="firstname" placeholder="Firstname">
                    <input type="text" name="lastname" id="lastname" placeholder="Lastname"><br><br>
                    <select name="filter" id="filter">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="Other">Other</option> </select>             
                    <input type="text" name="zipCode" id="zipCode" placeholder="ZIP code">
                    <input type="text" name="p.number" id="p.number" placeholder="Phone Number"><br><br>
                    <input type="text" name="ccinfo" id="ccinfo" placeholder="Creditcard info">
                    <input type="text" name="bsn" id="bsn" placeholder="Social Security Number"><br><br>
                    <select name="country" id="Country">
                        <option value="1">Basic</option>
                        <option value="2">Expanded</option>
                        <option value="3">Pro</option>
                    </select>
                    <input type="submit" name="cmdReken" value="Verstuur">       
                </form>
            </div>
        </main>
    </body>
</html>