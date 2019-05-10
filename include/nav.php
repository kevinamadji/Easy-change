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

              $page = " ";

if($page=="Accueil"){$AccueilIsActive = 'class="active"';}else{ $AccueilIsActive=""; }
if($page=="Mes operations"){$MesoperationsIsActive = 'class="active"';}else{ $MesoperationsIsActive=""; }
if($page=="Historique"){$HistoriqueIsActive = 'class="active"';}else{ $HistoriqueActive=""; }
if($page=="Forum"){$ForumIsActive = 'class="active"';}else{ $ForumIsActive=""; }
if($page=="Contact"){$ContactIsActive = 'class="active"';}else{ $ContactIsActive=""; }
             
//Ces lignes servent à afficher l'active au niveau des pages
//IL FAUDRA DONC AJOUTER $page= "titre de la page a activer"; SUR CHAQUE PAGE SUR LE MENU
?>


<head>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
     <link  rel="stylesheet" type="text/css" href="../style/nav.css">
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: 2px rgba(252, 164, 55, 0.5) ridge; box-shadow: 1px 1px 4px #FCA437;">
  <a class="navbar-brand" href="#">EasyChange</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li <?php echo $AccueilIsActive; ?> class="nav-item">
        <a class="nav-link" href="<?php if( $repRacine == true){?> index.php <?php } else{  ?> ../index.php <?php } ?>">Accueil</a>
      </li>
        
      <?php
        if(isset($_SESSION['nom']))
        {
        ?>        
      <li <?php echo $MesoperationsIsActive; ?> class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="<?php if($repRacine == true) {?> <?php} else{  ?><?php } ?>">
          Mes opérations
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?php if($repRacine == true) { ?> pages/inscriptionChange.php <?php } else{  ?> inscriptionChange.php <?php } ?>">Effectuer une modification</a>
          <a class="dropdown-item" href="<?php if($repRacine == true) { ?> pages/opEnCours.php <?php } else{  ?> opEnCours.php <?php } ?>">Opération en cours</a>
        </div>
      </li>
      <li <?php //echo $HistoriqueIsActive; ?> class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="<?php if($repRacine == true) {?> <?php} else{  ?><?php } ?>" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Historique
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Dernière modification</a>
          <a class="dropdown-item" href="#">Pièce jointe</a>
        </div>
      </li>
        <?php
           }
         ?>
         
         
         
      <li <?php echo $ForumIsActive; ?> class="nav-item">
        <a class="nav-link" href="<?php if($repRacine == true) { ?> pages/forum.php <?php } else{  ?> contact.php <?php } ?>">Forum</a>
      </li>
      <li <?php echo $ContactIsActive; ?> class="nav-item">
        <a class="nav-link" href="<?php if($repRacine == true) { ?> pages/contact.php <?php } else{  ?> contact.php <?php } ?>">Contact</a>
      </li>
    </ul>
       
       
       
      <!--Menu dropdown sur la droite -->
      <ul class="nav navbar-nav navbar-right">
        <div class="btn-group">
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <?php  if( $repRacine == true){?> <img style="border-radius: 100%; width: 60px; padding: 3px;" src="uploads/<?php echo $result['photo']; ?>">  <?php } else{  ?> <img style="border-radius: 100%; width: 60px; padding: 3px;" src="../uploads/<?php echo $result['photo']; ?>">  <?php } }?>
               
               <?php if(isset($_SESSION['nom'])) {echo $_SESSION['nom'];} ?>
          </button>
             
             
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php if($repRacine == true) { ?> pages/monCompte.php <?php } else{  ?> monCompte.php <?php } ?>">Mon compte</a>
            <a class="dropdown-item" href="<?php if($repRacine == true) { ?> pages/ajoutOrganisme.php <?php } else{  ?> ajoutOrganisme.php <?php } ?>">Ajouter un organisme</a>
            <a class="dropdown-item" href="<?php if($repRacine == true) { ?> pages/mesDocuments.php <?php } else{  ?> mesDocuments.php <?php } ?>">Mes documents</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php if($repRacine == true) { ?> pages/deconnexion.php <?php } else{  ?> deconnexion.php <?php } ?>"><button type="button" class="btn1 btn btn-outline-primary">Deconnexion</button></a>
          </div>
        </div>
      </ul>
      <!-- FIN -->
      
      
      <!-- c'est la partie ou je bloque pour se connecter et s'inscrire -->
      <?php                  
        if(!isset($_SESSION['nom']))
        {
        ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="nav navbar-nav navbar-right">
        
        <div class="btn-group">
          <a class="nav-link" href= <?php if($repRacine == true) { ?> pages/connexion.php <?php } else{  ?> connexion.php <?php } ?>> <button type="button" class="btn1 btn btn-outline-secondary" style="float: right;">Se Connecter</button> </a>
                <a class="nav-link" href= <?php if($repRacine == true) { ?> pages/inscription.php <?php } else{  ?> inscription.php <?php } ?>> <button type="button" class="btn btn-outline-secondary" style="float: right;">S'inscrire</button></a>
        </div>
      </ul>
      </nav>
      <?php
        }
      ?>
  </div>
</nav>
