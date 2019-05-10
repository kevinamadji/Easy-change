
<meta charset="utf-8">

<?php
    session_start();
?>
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
        

/*                    $result = $req->fetch();
*/

    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['datenaiss']) && isset($_POST['adresse']) && isset($_POST['cp']) && isset($_POST['ville']) && isset($_POST['mail']) && isset($_POST['situation']) && isset($_POST['organisme']) && isset($_FILES['img']) && $_FILES['img']['error'] == 0)
        {
            $img = $_FILES['img']['name'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $date_naissance = $_POST['datenaiss'];
            $tel = $_POST['tel'];
            $situation = $_POST['situation'];   
            $adresse = $_POST['adresse'];
            $cp = $_POST['cp'];
            $ville = $_POST['ville'];
            $mail = $_POST['mail'];

            

        /*if(($_POST['nom'] != $_result['nom']) || ($_POST['prenom'] != $_result['prenom']) || ($_POST['datenaiss'] != $_result['date_naissance']) || ($_POST['tel'] != $_result['tel']) || ($_POST['situation'] != $_result['situation']) || ($_POST['adresse'] != $_result['adresse']) || ($_POST['cp'] != $_result['code_postale']) || ($_POST['ville'] != $_result['ville']) || ($_POST['mail'] != $_result['ville']) )
                {*/
                    
                    foreach ($_POST['organisme'] as $organisme) 
                    {
                        echo $organisme;

                        $req = $connexion->prepare('INSERT INTO user_organisme VALUES(:id_user, :id_organisme)');
                            $req->execute
                            (
                                        array(
                                            'id_user' => $_SESSION['idUser'],
                                            'id_organisme' => $organisme
                                        )
                            );
                    }
            
                    $req2 = $connexion->prepare("UPDATE users SET nom = :nom, prenom = :prenom, date_naissance = :datenaiss, tel = :tel, id_situation = :situation, adresse = :adresse, code_postale = :cp, ville = :ville, mail = :mail WHERE idUser = :idUser, photo = :photo"); 
                    $req2->execute(
                                        array(  'nom' => $nom,
                                                'prenom' => $prenom,
                                                'datenaiss' => $date_naissance,
                                                'tel' => $tel,
                                                'situation' => $situation,
                                                'adresse' => $adresse,
                                                'cp' => $cp,
                                                'ville' => $ville,
                                                'mail' => $mail,
                                                'idUser' => $_SESSION['idUser'],
                                                'photo' => $img
                                            )
                                   );
         
                         header("Location:../pages/opEnCours.php");
                     ?>
                    <!-- <script type="text/javascript">alert('Modification effectuée avec succèe')</script>   -->

            
                <?php    
                     /*header('Location: ../pages/monCompte.php');               
                    $req2->closeCursor();
                }*/
       }


            

?>
    
    
    
</body>