<?php
    session_start();
?>
<!DOCTYPE>


<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style/formulaire.css">
</head>


<body>
<headr>
    <?php
        $repRacine = false;
        include("../include/nav.php");
    ?>
</header>




<form action="../recuperation_donnees/recup_organisme.php" method="POST" enctype="multipart/form-data" >
    
    <div class="global-form"> 
        
        <fieldset> 
            
                <legend>AJOUT D'ORGANISME</legend>


                <div class="form-group">
                    <input class="form-control" type="text" name="nom" placeholder="*NOM" required>
                </div>

                <div class="form-group">
                    <input class="form-control" type="text" name="matricule" placeholder="*MATRICULE" required>
                </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <input class="form-control" type="text" name="tel" placeholder="*TEL" required style="width: 400px;">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <input class="form-control" type="text" name="mail" placeholder="*MAIL" required>
                    </div>
                </div>
            </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="adresse" placeholder="*ADRESS" required>
                </div>


                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="cp" placeholder="*CODE POSTALE" required style="width: 400px;">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input class="form-control" type="text" name="ville" placeholder="*VILLE" required>
                        </div>
                    </div>
                </div>


                
            
                
            
              

            
            <div class="row">
                <div class="col-lg-6">
                    <input type="submit" value="AJOUTER " class="btn btn-primary btn-block" style="background-color:#3CC0EC; color:whitesmoke; font-size: 1.5em; font-weight:bold; border-color:transparent;">
                </div>
                
                <div class="col-lg-6">
                    <input type="reset" value="EFFACER" class="btn btn-primary btn-block" style="background-color:#3CC0EC; color:whitesmoke; font-size: 1.5em; font-weight:bold; border-color:transparent;">
                </div>
            </div>
            
            
        </fieldset>    
            
    </div>
    
</form>
    
    
    
    
</body>
</html>