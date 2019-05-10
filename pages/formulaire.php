<?php
    session_start();
?>
<!DOCTYPE>


<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style/formulaire.css">
</head>


<body style="background-color:whitesmoke;">
<headr>
    <?php
        include("../include/nav.php");
    ?>
</header>




<form action="recupformulaire.php" method="POST" enctype="multipart/form-data" >
    
    <div class="global-form"> 
        
        <fieldset> 
            
                <legend>FICHE DE DÉCLARATION DE CHANGEMENT</legend>


                <div class="form-group">
                    <input class="form-control" type="text" name="nom" placeholder="*NOM" required>
                </div>

                <div class="form-group">
                    <input class="form-control" type="text" name="prenom" placeholder="*PRENOM" required>
                </div>
            
                <div class="form-group">
                    <input class="form-control" type="text" name="datenaiss" placeholder="*DATE DE NAISSANCE" required>
                </div>
            
                <div class="form-group">
                    <input class="form-control" type="text" name="adress" placeholder="*ADRESSE" required>
                </div>
            
                <div class="form-group">
                    <input class="form-control" type="text" name="mail" placeholder="*MAIL" required>
                </div>
            
                <div class="form-group">
                    <input class="form-control" type="password" name="mdp" placeholder="*MOT DE PASSE*" required>
                </div>
            
               
                <div class="form-group">
                    <input type="radio" id="genre" name="genre" value="M" checked>
                    <label for="M">M</label>
                </div>
            
                <div class="form-group">
                    <input type="radio" id="genre" name="genre" value="F" checked>
                    <label for="F">F</label>
            </div>
              
            
                <div class="form-group">
                    <input class="form-control" type="file"  name="img">
                </div>

            
            <div class="row">
                <div class="col-lg-6">
                    <input type="submit" value="Connexion" class="btn btn-primary btn-block" style="background-color:#3CC0EC; color:whitesmoke; font-size: 1.5em; font-weight:bold; border-color:transparent;">
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