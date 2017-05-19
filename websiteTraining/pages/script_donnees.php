

<?php include("/var/www/websiteTraining/includes/connexion_db.inc.php"); ?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Training ISI</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
    
	<p>
		<h1>Scripts pour collecter les données </h1>
			<?php
					$resultat = $mysqli->query("SELECT * from produits");
					while($donnee=$resultat->fetch_assoc()){
						$id=$donnee['id'];
						$nom=$donnee['nom'];
						echo "<center><td><li><a href='?page=pages/script_donnees.php&id=$id'>$nom</a></li></td></center><br>";
					}
					
					
					if(isset($_GET['id']) && !empty($_GET['id']))
					{
						$id=$_GET['id'];
						$resultat_id = $mysqli->query("SELECT * from produits where id=$id");
						
						echo "<h3>Details: </h3>";
						
						while($donnee=$resultat_id->fetch_assoc())
						{
							echo '<h4>'.$donnee['nom'].'</h4>';
							echo "<center><table><tr>";
							echo '<td>Efficacité:'.htmlspecialchars($donnee['efficacite']).':</td><br><td>Date: '.htmlspecialchars($donnee['annee']).'</td>';
							echo "</tr></table></center>";
						}
						
					}
			?>
			
	</p>
  
</body>
</html>
