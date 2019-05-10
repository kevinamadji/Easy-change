<?php
    session_start();
?>
<!DOCTYPE>


<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style/monCompte.css">
</head>


<body>
<headr>
    <?php
        $repRacine = false;
        include("../include/nav.php");
    ?>
</header>



<div class="global-compte">
    <div class="container">
    <div class="row">
        <div class="col-lg-offset-1 col-lg-5">
            <p>NOM : </p>
        </div>

        <div class="col-lg-5">
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
                            
                                echo $result['nom'];
                            

                    
                ?>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-offset-1 col-lg-5">
            <p>PRENOM :</p>
        </div>

        <div class="col-lg-5">
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
                            
                                echo $result['prenom'];
                            

                    
                ?>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-offset-1 col-lg-5">
            <p>DATE DE NAISSANCE :</p>
        </div>

        <div class="col-lg-5">
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
                            
                                echo $result['date_naissance'];
                            

                    
                ?>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-offset-1 col-lg-5">
            <p>ADRESSE :</p>
        </div>

        <div class="col-lg-5">
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
                            
                                echo $result['adresse'];
                            

                    
                ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-offset-1 col-lg-5">
            <p>CODE POSTALE :</p>
        </div>

        <div class="col-lg-5">
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
                            
                                echo $result['code_postale'];
                            

                    
                ?>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-offset-1 col-lg-5">
            <p>VILLE :</p>
        </div>

        <div class="col-lg-5">
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
                            
                                echo $result['ville'];
                            

                    
                ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-offset-1 col-lg-5">
            <p>TELEPHONE :</p>
        </div>

        <div class="col-lg-5">
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
                            
                                echo $result['tel'];
                            

                    
                ?>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-offset-1 col-lg-5">
            <p>SITUATION :</p>
        </div>

        <div class="col-lg-5">
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

                    $req4 = $connexion->prepare('SELECT * FROM situation WHERE idSituation = :idSituation');
                    $req4->execute(
                                    array('idSituation' => $result['id_situation'])
                                );

                    $result4 = $req4->fetch();

                    echo $result4['libelle'];
                            

                    
                ?>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-offset-1 col-lg-5">
            <p>MAIL :</p>
        </div>

        <div class="col-lg-5">
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
                            
                                echo $result['mail'];
                            

                    
                ?>
        </div>
    </div>


    

    <a href="inscriptionChange.php"><input type="button" name="modif" class="btn btn-primary" value="MODIFIER"></a>








</div>
</div>    
    
    
</body>
</html>