<?php
    session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style/index.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!-- lien glyphicon -->
    <title>Accueil - EasyChange</title>
</head>


<body>

<header>
   <?php
        $page="Accueil";
    
    
      $repRacine = true;
        require("include/nav.php");
    ?>  
</header>
    
    
 <div class="resp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 slogan">
                        <h1>BIENVENUE SUR EasyChange !</h1> <br>
                        <a class="btn btn-info btn-lg">CLIQUEZ-ICI</a>
                    </div>
                </div>
            </div>
</div>






<footer>
   
</footer>

</body>
</html>