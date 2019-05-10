<?php
    session_start();
    $page="Mes operations";
?>
<!DOCTYPE>

<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style/OpEnCours.css">
</head>
<body>
<header>
    <?php
        $repRacine = false;
        include("../include/nav.php");
    ?>
</header>


<div class="table">
	<table>
		<h1>OPÉRATION EN COURS</h1>

		<th>ORGANISME CONCERNÉ</th>
		<th>LIBELLE</th>
		<th>STATUT</th>

		<tr>
			<td><?php ?></td>
			<td><?php ?></td>
			<td><?php ?></td>
		</tr>
		
	</table>
</div>


</body>
</html>