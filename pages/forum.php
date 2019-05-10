<?php
    session_start();
    $page="Forum";
?>
<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style/forum.css">
</head>


<body>
<header>
    <?php
        $repRacine = false;
        include("../include/nav.php");
    ?>
</header>



<div class="global-forum">
    <div class="container">
    <div class="row">
        <div class="for col-lg-5">
            <fieldset>
                <legend>SUJETS</legend>
                    <ul>
                        <li><a href="#">Sujet 1</a></li>
                        <li><a href="#">Sujet 2</a></li>
                        <li><a href="#">Sujet 3</a></li>
                        <li><a href="#">Sujet 4</a></li>
                        <li><a href="#">Sujet 5</a></li>
                        <li><a href="#">Sujet 6</a></li>
                        <li><a href="#">Sujet 7</a></li>
                        <li><a href="#">Sujet 8</a></li>
                    </ul>
            </fieldset>
        </div>





        <div class="for col-lg-offset-2 col-lg-5">
            <fieldset>
                <legend>NON RESOLUES</legend>
            </fieldset>
        </div>
    </div>
    </div>
</div>    
    
    
</body>
</html>