<?php
    session_start();
?>
<!DOCTYPE>


<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style/parametre.css">
</head>


<body>
<headr>
    <?php
        $repRacine = false;
        include("../include/nav.php");
    ?>
</header>



<div class="global-parametre">
    <div class="container">
    <div class="row">
        <div class="col-lg-offset-1 col-lg-5">
            <p>Information du compte</p>
        </div>

        <div class="col-lg-5">
            <a href="#">Modifier</a>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-offset-1 col-lg-5">
            <p>Mes organismes</p>
        </div>

        <div class="col-lg-5">
            <a href="#">Modifier</a>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-offset-1 col-lg-5">
            <p>Apparence</p>
        </div>

        <div class="col-lg-5">
            <a href="#">Modifier</a>
        </div>
    </div>
</div>
</div>    
    
    
</body>
</html>