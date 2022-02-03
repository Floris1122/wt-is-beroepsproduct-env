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
        <aside>
            <form class="searchBar" action="search.php">
                <input type="text" placeholder="Search" name="search">
                <button type="submit"></button>
            </form>
            <p style="float: left">Choose a filter:</p>
            <form action="index.php" method="GET">
                <select name="filter" id="filter">
                  <option value="Action">action</option>
                  <option value="Adventure">Adventure</option>
                  <option value="Drama">Drama</option>
                  <option value="Detective">Detective</option>
                  <option value="Family">Family</option>
                  <option value="Fantasy">Fantasy</option>
                  <option value="Historical_Drama">Historical Drama</option>
                  <option value="Horror">Horror</option>
                  <option value="Comedy">Comedy</option>
                  <option value="Crime">Crime</option>
                  <option value="Musical">Musical</option>
                  <option value="War">War</option>
                  <option value="Detective">Detective</option>
                  <option value="Rom-Com">Rom-Com</option>
                  <option value="Sciencefiction">Sciencefiction</option>
                  <option value="Thriller">Thriller</option>
                  <option value="Western">Western</option>
                  <option value="Documentary">Documentary</option>
                  <option value="Documentary">Documentary</option>              
                </select>
                <input type="submit" value="Search">
              </form>
        </aside>
        <main>
            <div class="grid">                
                <div class="Video">
                    <a href="PrisonBreak.php"><img src="img/pb.jpg" class="Video_Center" alt="error"></a>
                    <p>Prison Break</p>                  
                </div> 
            </div>  
        </main>     
    </body>
</html>

