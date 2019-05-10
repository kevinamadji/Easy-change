<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style/formulaire.css">
</head>




<?php

	$connexion = NULL;

            $nom = $_POST['nom'];
            $matricule= $_POST['matricule'];
            $adresse = $_POST['adresse'];
            $cp = $_POST['cp'];
            $ville = $_POST['ville'];
            $tel = $_POST['tel'];   
            $mail = $_POST['mail'];


    try
        {
            $connexion = new PDO('mysql:host=localhost; dbname=dbeasychange; charset=utf8', 'root', '');
        }
    catch(Exception $e)
        {
            die('Erreur : '. $e->getMessage());
        }

echo "$nom $matricule $adresse $cp $ville $tel $mail";

         if (isset($_POST['nom']) && isset($_POST['matricule']) && isset($_POST['adresse']) && isset($_POST['cp']) && isset($_POST['ville']) && isset($_POST['tel']) && isset($_POST['mail']) )
        {
        
            
            
            
            $req = $connexion->prepare("INSERT INTO organisme(nom, matricule, adresse, code_postale, ville, tel, mail) VALUES(:nom, :matricule, :adresse, :cp, :ville, :tel, :mail)"); 
                     
                echo "Organisme ajouté avec succès !";        
            
                $req->execute(
                    array
                        (
                    
                            'nom' => $nom,
                            'matricule' => $matricule, 
                            'adresse' => $adresse, 
                            'cp' => $cp,
                            'ville' => $ville, 
                            'tel' => $tel, 
                            'mail' => $mail,
                                            
                        )
                    ); 
                                   
                    $req->closeCursor();
                }

                else
                {
                	echo "Erreur lors de l'ajout de l'organisme, veuillez réésayer ultérieurement. Nous vous prions de nous excuzez pour la gène occasionnelle." ;
                }
        







?>