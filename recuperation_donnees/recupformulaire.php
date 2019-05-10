<?php

    



    
    $extensions = array('jpg', 'jpeg', 'png', 'pdf');
    

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $naiss = $_POST['datenaiss'];
    $mail = $_POST['mail'];
    $mdp = $_POST['mdp'];

    
    if(isset($_FILES['img'])  && $_FILES['img']['error'] == 0)
                {
        
                    // VERIFICATION DE LA TAILLE DU FICHIER
        

                    if ($_FILES['img']['size'] <= 8000000)
                        
                    {
                    // VÉRIFICATION DE L'EXTENSION RÉCUPÉRÉE
                    $infosfichier = pathinfo($_FILES['img']['name']);
                    $extension_upload = $infosfichier['extension'];
                        
                        
    
                    if (in_array($extension_upload, $extensions))
                                {
                                    // SI L'ÉXTENSION EST BONNE DANS CE CAS ON LA STOCK
                                    move_uploaded_file($_FILES['img']['tmp_name'], 'imgs/' . basename($_FILES['img']['name']));
                                    echo "Pièce jointe envoyée avec succés !";
                                    
?> 


                <img src="imgs/damian_lillard_by_sjla2kology101-d5gth6e.png"/>
                <meta charset="utf-8">


<?php
                                    echo "NOM :" . " " . $nom; <br>
                                    echo "PRENOM :" . " " . $nom; <br>
                                    echo "DATE DE NAISSANCE :" . " " . $nom; <br>
                                    echo "MAIL :" . " " . $nom; 
                                }
                                else
                                {
                                    echo "L'extension" . " " . $_FILES['img']['name'] . " " . "n'est pas autorisée !"; 
                                }
                    }
                }




?>