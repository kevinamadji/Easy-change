<?php
    session_start();
?>
<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style/mesDocuments.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!-- lien glyphicon -->

</head>


<body>

<header>
   <?php
        $repRacine = false;
        include("../include/nav.php");
    ?>  
</header>
    
 <div class="document"> 

    <h1>DOCUMENTS</h1>

    <div class="row">
        <div class="col-lg-offset-3 col-lg-2">
            <a href="#"><i class="material-icons" style="font-size:300px;color:#FCA437;">folder</i></a>
            <h3>ORGANISATION 1</h3>
        </div>

        <div class="col-lg-2">
            <a href=""><i class="material-icons" style="font-size:300px;color:#FCA437">folder</i></a>
            <h3>ORGANISATION 2</h3>    
        </div>

        <div class="col-lg-2">
            <a href=""><i class="material-icons" style="font-size:300px;color:#FCA437">folder</i></a>
            <h3>ORGANISATION 3</h3>    
        </div>
    </div>

    <div class="row">
        <div class="col-lg-offset-3 col-lg-2">
            <a href=""><i class="material-icons" style="font-size:300px;color:#FCA437">folder</i></a>
            <h3>ORGANISATION 4</h3>    
        </div>
            
        <div class="col-lg-2">
            <a href=""><i class="material-icons" style="font-size:300px;color:#FCA437">folder</i></a>
            <h3>ORGANISATION 5</h3>     
        </div>

        <div class="col-lg-2">
            <a href=""><i class="material-icons" style="font-size:300px;color:#FCA437">folder</i></a>
            <h3>ORGANISATION 6</h3>   
        </div>
    </div>

    <div class="row">
        <div class="col-lg-offset-3 col-lg-2">
            <a href=""><i class="material-icons" style="font-size:300px;color:#FCA437">folder</i></a>
            <h3>ORGANISATION 7</h3>    
        </div>

        <div class="col-lg-2">
            <a href=""><i class="material-icons" style="font-size:300px;color:#FCA437">folder</i></a>
            <h3>ORGANISATION 8</h3>   
        </div>

        <div class="col-lg-2">
            <a href=""><i class="material-icons" style="font-size:300px;color:#FCA437">folder</i></a> 
            <h3>ORGANISATION 9</h3>   
        </div>
    </div>
</div>

</body>
</html>