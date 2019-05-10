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



                    $req = $connexion->prepare('SELECT * FROM users WHERE idUser = :id');
                    $req->execute(
                                    array('id' => $_SESSION['idUser'])
                                );

                    $result = $req->fetch();
                    $req2 = $connexion->query('SELECT * FROM situation');  
                    $req3 = $connexion->query('SELECT * FROM organisme');
                    $req4 = $connexion->prepare('SELECT * FROM situation WHERE idSituation = :idSituation');
                    $req4->execute(
                                    array('idSituation' => $result['id_situation'])
                                );
                    $result4 = $req4->fetch();

                    //$donnees = mysql_fetch_array($require '$req3';);
                   
                    
?>

<form action="../recuperation_donnees/recup_inscriptionChange.php" method="POST" enctype="multipart/form-data" >
    
    <div class="global-form"> 
        
        <fieldset> 
                <legend>INSCRIPTION</legend>
            
            
                
                <div class="photo_profile">
                    <img class="utilisateur" src="../imgs/user.png"> <br>
                    <input class="insert_image" type="file"  name="img">
                </div>
                
            

            <div class="row">
                <div class="form-group col-lg-6">
                    <input class="form-control" type="text" name="nom" placeholder="*NOM" value="<?php echo $result['nom']; ?>" required>
                </div>

                <div class="form-group col-lg-6">
                    <input class="form-control" type="text" name="prenom" placeholder="*PRENOM" value="<?php echo $result['prenom']; ?>" required>
                </div>
            </div>
                <div class="form-group">
                    <input class="form-control" type="date" name="datenaiss" placeholder="*DATE DE NAISSANCE" value="<?php echo $result['date_naissance']; ?>" required>
                </div>

        <div class="row">        
            <div class="col-lg-6">
                <div class="form-group">
                    <input class="form-control" type="text" name="mail" placeholder="*MAIL" value="<?php echo $result['mail']; ?>" required>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <input class="form-control" type="text" name="tel" placeholder="*TELEPHONE" value="<?php echo $result['tel']; ?>" required>
                </div>
            </div>
        </div>
                <div class="form-group">
                    <input class="form-control" type="text" name="adresse" placeholder="*ADRESSE" value="<?php echo $result['adresse']; ?>" required>
                </div>

            <div class="row">
                <div class="form-group col-lg-6">
                    <input class="form-control" type="text" name="cp" placeholder="*CODE POSTALE" value="<?php echo $result['code_postale']; ?>" required style="width: 400px;">
                </div>
            
                <div class="form-group col-lg-6">
                    <input class="form-control" type="text" name="ville" placeholder="*VILLE" value="<?php echo $result['ville']; ?>" required>
                </div>
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
                 
                       $result3 = $req3->fetch()   
                        
?>
                        <option value="<?php echo $result3['idOrganisme'] ?>"></option>


                       <!-- <option value="<?php //echo $result3['idOrganisme'] ?>"><?php //echo $result3['nom']; if(!empty($req3)){ echo  ?> <i class="fa fa-check-square-o" style="font-size:24px"></i><?php; }?></option>-->


                        



<?php

                   // }
                    $req3->closeCursor();
            ?>
                
       </SELECT>
                </div>
            
                <li><a class="nav-link" href= <?php if($repRacine == true) { ?> pages/ajoutOrganisme.php <?php } else{  ?> ajoutOrganisme.php <?php } ?>>Ajouter un organisme </li>
            
        

            
            <div class="row">
                <div class="col-lg-6">
                    <input type="submit" value="MODIFIER" class="btn btn-primary btn-block" >
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