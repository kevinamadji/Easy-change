<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style/connexion.css">
</head>


<body>
<form action="../recuperation_donnees/recupconnexion.php" method="POST">
    
    <div class="global-connexion"> 
        <fieldset>    
                <legend>CONNEXION</legend>


                <div class="form-group">
                    <input class="form-control" type="text" name="login" placeholder="NOM D'UTILISATEUR">
                </div>

                <div class="form-group">
                    <input class="form-control" type="password" name="mdp" placeholder="MOT DE PASSE">
                </div>

                <input type="submit" value="Connexion" class="btn btn-primary btn-block">
            
        </fieldset>    
            
    </div>
    
</form>






</body>
</html>