<?php
    session_start();
?>
<!DOCTYPE>


<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style/inscription.css">
</head>


<body style="background-color:whitesmoke;">
<headr>
    <?php
        $repRacine = false;
        include("../include/nav.php");
    ?>
    </header>


<?php
     try
                    {
                        $connexion = new PDO('mysql:host=localhost; dbname=dbeasychange; charset=utf8', 'root', '');
                    }
                    catch(Exception $e)
                    {
                        die('Erreur : '. $e->getMessage());
                    }
$req2 = $connexion->query('SELECT * FROM situation');  
                    $req3 = $connexion->query('SELECT * FROM organisme');
                    $req4 = $connexion->query('SELECT * FROM situation');
                    $result4 = $req4->fetch();
?>




<form action="../recuperation_donnees/recup_inscription.php" method="POST" enctype="multipart/form-data" >
    
    <div class="global-form"> 
        
        <fieldset> 
            
                <legend>INSCRIPTION</legend>
            
            
                
                <div class="photo_profile">
                    <img class="utilisateur" src="../imgs/user.png"> <br>
                    <input class="insert_image" type="file"  name="img">
                </div>
                
           


                <div class="form-group">
                    <input class="form-control" type="text" name="nom" placeholder="*NOM" required>
                </div>

                <div class="form-group">
                    <input class="form-control" type="text" name="prenom" placeholder="*PRENOM" required>
                </div>
            
                <div class="form-group">
                    <input class="form-control" type="date" name="datenaiss" placeholder="*DATE DE NAISSANCE" required>
                </div>


                <div class="form-group">
                    <input class="form-control" type="text" name="adresse" placeholder="*ADRESSE" required>
                </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <input class="form-control" type="text" name="cp" placeholder="*CODE POSTALE" required>
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
                <div class="form-group">
                    <input class="form-control" type="text" name="tel" placeholder="*TELEPHONE" required style="width: 400px;">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <input class="form-control" type="text" name="mail" placeholder="*MAIL" required>
                </div>
            </div>
        </div>
                <div class="form-group">
                    <SELECT class="form-control" name="situation" size="1" style="width: 400px;">
                        <OPTION value="2">Marié(e)
                        <OPTION value="3">Divorcé(e)
                        <OPTION value="4">Célibataire
                    </SELECT>
                </div>
            
                
            
                
            
            
                <div class="form-group">
                    <select class="form-control" name="situation" style="width: 400px;">


                        <option value="<?php echo $result4['idSituation']; ?>"> <?php echo $result4['libelle']; ?> </option>
            <?php
                 
                    while ($result2 = $req2->fetch()) {
                        
?>
                        <option value="<?php echo $result2['idSituation']; ?>"><?php echo $result2['libelle'];?></option>
                  

<?php

                    }
                    $req2->closeCursor();
            ?>
                
                 </select>
                </div>       
                
            
            
            
                <div class="form-group">
                    <SELECT  multiple="oui" size="3" class="form-control" name="organisme[]" size="1" style="width: 400px;">
            <?php
                 
                    while ($result3 = $req3->fetch()) {
                        
?>
                        <option value="<?php echo $result3['idOrganisme'] ?>"><?php echo $result3['nom'] ?></option>
                        



<?php

                    }
                    $req3->closeCursor();
            ?>
                
       </SELECT>
                </div>
            
                <li><a class="nav-link" href= <?php if($repRacine == true) { ?> pages/ajoutOrganisme.php <?php } else{  ?> ajoutOrganisme.php <?php } ?>>Ajouter un organisme </li>
            
        
                <div class="form-group">
                    <input class="form-control" type="password" name="mdp" placeholder="*MOT DE PASSE" required>
                </div>
            
                <div class="form-group">
                    <input class="form-control" type="password" name="mdp2" placeholder="*CONFIRMER MOT DE PASSE" required>
                </div>

            
            <div class="row">
                <div class="col-lg-6">
                    <input type="submit" value="S'INSCRIRE" class="btn btn-primary btn-block" >
                </div>
                
                <div class="col-lg-6">
                    <input type="reset" value="EFFACER" class="btn btn-primary btn-block">
                </div>
            </div>
            
            
        </fieldset>    
            
    </div>
    
</form>
    
    
    
    
</body>
</html>