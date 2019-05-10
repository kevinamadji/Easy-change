<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../style/nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

     <!-- DROPDOWN -->
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


</head>


<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?php if( $repRacine == true){?> index.php <?php } else{  ?> ../index.php <?php } ?>"> EasyChange</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
          </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href= "<?php if( $repRacine == true){?> index.php <?php } else{  ?> ../index.php <?php } ?>"> ACCUEIL<span class="sr-only">(current)</span></a>
                      </li>
                <?php
                    if(isset($_SESSION['nom']))
                        {
                ?>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href=<?php if($repRacine == true) {?> <?php} else{  ?><?php } ?>>MES OPERATIONS</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Effectuer une modification</a>
                            <a class="nav-link" href= "<?php if($repRacine == true) { ?> pages/opEnCours.php <?php } else{  ?> opEnCours.php <?php } ?>">Opération en cours</a>
                        </div>
                      </li>
                
                
                      


                      <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="<?php if($repRacine == true) {?> <?php} else{  ?><?php } ?>">
                                HISTORIQUE
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="#">Dernière modification</a>
                                  <a class="dropdown-item" href="#">Pièce jointe</a>
                            </div>
                      </li>
                
                    <?php
                  }
                    ?>



                
                    <li class="nav-item">
                        <a class="nav-link" href="<?php if($repRacine == true) { ?> pages/forum.php <?php } else{  ?> contact.php <?php } ?>">FORUM</a>
                      </li>
                
                      <li class="nav-item">
                        <a class="nav-link" href= "<?php if($repRacine == true) { ?> pages/contact.php <?php } else{  ?> contact.php <?php } ?>" >CONTACT</a>
                      </li>


                      <div class="photo-profile">
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
                    if(isset($_SESSION['idUser'])){
                    $req->execute(
                                    array('id' => $_SESSION['idUser'])
                                );

                    $result = $req->fetch();

                    ?>
                    <li class="nav-item active">
                    <?php
                        if( $repRacine == true){?> <img src="uploads/<?php echo $result['photo']; ?>">  <?php } else{  ?> <img src="../uploads/<?php echo $result['photo']; ?>">  <?php } }?>
                      </li>
<?


                        
                      </div>
            </ul>
      
      <?php

?>
      
            <!--<form class="form-inline my-2 my-lg-0" >
              <input class="form-control mr-sm-2" type="search" placeholder="RECHERCHE" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">RECHERCHE</button>
            </form>-->
        <?php                  
        if(!isset($_SESSION['nom']))
        {
        ?>



          

            <div class="row pull-right" style="margin-left:30px;">
                <a class="nav-link" href= "<?php if($repRacine == true) { ?> pages/connexion.php <?php } else{  ?> connexion.php <?php } ?>"> <button type="button" class="btn1 btn btn-outline-secondary">Se Connecter</button> </a>
                <a class="nav-link" href= "<?php if($repRacine == true) { ?> pages/inscription.php <?php } else{  ?> inscription.php <?php } ?>"> <button type="button" class="btn btn-outline-secondary">S'inscrire</button></a>
            </div>

<?php

}
        else
        {


            if (isset($_SESSION['nom'])){

?>

              







                <div class="dropdown" style="position: absolute;right: 1%;">
                      <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">

                         &nbsp;
                         <span style="font-size: 1.5em; font-weight: bold;">
                            <?php
                              echo $_SESSION['nom'] . " ";
                            ?>
                        </span>


                      </button>
                          <ul class="dropdown-menu">
                              <li><a class="nav-link" href="<?php if($repRacine == true) { ?> pages/monCompte.php <?php } else{  ?> monCompte.php <?php } ?>">Mon compte</a></li>

                              <li><a class="nav-link" href="<?php if($repRacine == true) { ?> pages/ajoutOrganisme.php <?php } else{  ?> ajoutOrganisme.php <?php } ?>">Ajouter un organisme </a></li>

                              <li><a class="nav-link" href= "<?php if($repRacine == true) { ?> pages/mesDocuments.php <?php } else{  ?> mesDocuments.php <?php } ?>">Mes documents</a></li>

                              <li><a class="nav-link" href= "<?php if($repRacine == true) { ?> pages/parametre.php <?php } else{  ?> parametre.php <?php } ?>">Paramètres</a></li>

                              <li><a class="nav-link" href= "<?php if($repRacine == true) { ?> pages/deconnexion.php <?php } else{  ?> deconnexion.php <?php } ?>"> <button type="button" class="btn1 btn btn-outline-primary">Deconnexion</button> </a></li>
                          </ul>
                </div>






           <?php

}
      }
    

?>
    
        
    </form>
  </div>
</nav>

</body>
</HTML>