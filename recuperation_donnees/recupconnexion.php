<?php
    session_start();
?>


<!DOCTYPE HTML>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="">
</head>


<body>  


<?php


//$connexion = 


    


    try
        {
            $connexion = new PDO('mysql:host=localhost; dbname=dbeasychange; charset=utf8', 'root', '');
        }
    catch(Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }

        $id = $_POST['login'];
        $mdp = $_POST['mdp'];

        if(isset($id) && isset($mdp))
            {
                

                $req = $connexion->prepare("SELECT idUser, nom, prenom, password FROM users WHERE mail = :id");

                $req->execute(array('id' => $id));

                // récuperation du tableau d'enregistrement par ligne
                $result = $req->fetch();

                // comparaison saisie et ce qu'il y a dans la bd
                $is_password_correct = password_verify($_POST['mdp'], $result['password']);

                //echo "aaa";
                if(!$result)
                {
                    echo "Identifiant invalide";
                }
                else
                {
                    //echo "bbb";
                    if($is_password_correct)
                    {
                        //echo "ccc";

                        $_SESSION['nom'] = $result['nom'];
                        $_SESSION['prenom'] = $result['prenom'];
                        $_SESSION['idUser'] = $result['idUser'];

                        header("Location:../index.php");


                    }

                    else
                    {
                        //echo "ddd";

                            echo "Mot de passe incorrect";

                       
                    }

                }
            }

    
?>
    
    
</body>

</html>