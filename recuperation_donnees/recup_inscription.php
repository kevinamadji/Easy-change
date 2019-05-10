





<?php
     $connexion = NULL;


    try
        {
            $connexion = new PDO('mysql:host=localhost; dbname=dbeasychange; charset=utf8', 'root', '');
        }
    catch(Exception $e)
        {
            die('Erreur : '. $e->getMessage());
        }

 
    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['datenaiss']) && isset($_POST['adresse']) && isset($_POST['cp']) && isset($_POST['ville']) && isset($_POST['mail']) && isset($_POST['mdp']) && isset($_POST['mdp2']) && isset($_FILES['img']) && $_FILES['img']['error'] == 0 )
        {
            $img = $_FILES['img']['name'];
            $nom = $_POST['nom'];
            $prenom= $_POST['prenom'];
            $date_naissance = $_POST['datenaiss'];
            $tel = $_POST['tel'];
            $situation = $_POST['situation'];   
            $adresse = $_POST['adresse'];
            $cp = $_POST['cp'];
            $ville = $_POST['ville'];
            $mail = $_POST['mail'];
            $mdp = $_POST['mdp'];
            $mdp2 = $_POST['mdp2'];
        
     
        if($_POST['mdp'] == $_POST['mdp2'] && ($_FILES['img']['size'] <= 1000000)  && ($_FILES['img']['name']))
                {
                    $pass_hache = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
            
                    $req = $connexion->prepare("INSERT INTO users(nom, prenom, date_naissance, tel, adresse, code_postale, ville, mail, password, justificatif_domicile, photo) VALUES(:nom, :prenom, :date_naissance, :tel, :adresse, :cp, :ville, :mail, :password, :justif, :photo)"); 
                     
                    // recup IMG
                        $infosfichier = pathinfo($_FILES['img']['name']);
                        $extension_upload = $infosfichier['extension'];
                        $extensions_autorisees = array('JPG', 'JPEG', 'gif', 'png');
                        if (in_array($extension_upload, $extensions_autorisees))
                            {
                                // On peut valider le fichier et le stocker définitivement
                                move_uploaded_file($_FILES['img']['tmp_name'], '../uploads/' . basename($_FILES['img']['name']));

                        $req->execute(
                                    array
                                    (
                                
                                        'nom' => $nom,
                                        'prenom' => $prenom, 
                                        'date_naissance' => $date_naissance, 
                                        'tel' => $tel,
                                        'adresse' => $adresse, 
                                        'cp' => $cp, 
                                        'ville' => $ville, 
                                        'mail' => $mail, 
                                        'password' => $pass_hache,
                                        'justif' => 'justif', 
                                        'photo' => $img
                                                        
                                    ));
                            
                            }
                        
                               
                



                }
                    
                    header('Location: ../pages/connexion.php'); 

                    ?>
                    <script type="text/javascript">alert('Merci de votre inscription !' </br> 'Nous sommes heureux de vous compter parmis nos nombreux utilisateurs')</script>  

            
                <?php
                    //echo "Merci de votre inscription, nous sommes heureux de vous compter parmis nos nombreux utilisateurs";
                    $req->closeCursor();
                
        

    }


            

?>  
 
     
    
