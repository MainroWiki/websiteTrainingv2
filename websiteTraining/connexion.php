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
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">Training<span class="logo_colour">ISI</span></a></h1>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php">Home</a></li>
          <li><a href="categorie.php">Catégories</a></li>
          <li><a href="upload.php">Upload</a></li>
          <li><a href="contacts.php">Contact</a></li>
	  <li  class="selected"><a href="connexion.php">Connexion</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <!-- insert your sidebar items here -->
            <?php include('./includes/repositories.inc.php'); ?>
			</div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <?php include('./includes/last_categories.inc.php'); ?>
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
		  <div class="sidebar_item">
            <?php include('./includes/news.inc.php'); ?>
          </div>
          <div class="sidebar_base"></div>
        </div>
      </div>
      <div id="content">
        <h1>Connexion</h1>
	<h5>L'administrateur du site est connecte</h5>
	<hr/>
	
	<br/>
		
<?php         
	     if(!isset($_COOKIE['ID']) || empty($_COOKIE['ID'])){
		echo '<form action="#" method="POST" >
                <div>
                    Nom:<br/>
                    <input type="text" name="nom" value="" />
                </div><br/>
                <div>
                    Prenom:<br/>
                    <input type="password" name="passwd" value=""/>
                </div>
                <div>
                    <input type="submit" value="Connexion" />
                </div>
       		 </form><br/><br/>';
              if (isset($_POST['nom']) && !empty($_POST['nom'])) {

              	$nom = $_POST["nom"];

              	if (isset($_POST['passwd']) && !empty($_POST['passwd'])) {
              		$pass = $_POST["passwd"];
			
			if($nom==="admin" && $pass==="GHtytPJP4.86,90Ag98"){
				setcookie("ID","admin123456",time()+1000);
				header("Location: connexion.php");
			}
			else if($nom==="user" && $pass==="azerty"){
                                setcookie("ID","user123456",time()+1000);
                                header("Location: connexion.php");
			}
			else{
				echo "Mauvais identifiants!!.<br>";
			}
		}
		

               }
	      }
	      if(isset($_COOKIE['ID']) && !empty($_COOKIE['ID'])){
			
			if($_COOKIE['ID'] === "admin123456"){
				echo '<h3>Bienvenue admin,</h3>';
				echo 'Voici votre ID de session: '.htmlspecialchars($_COOKIE['ID']).'<br>';
				echo 'Voici le flag: ISILAB{R3plAy_S3SS1ON}<br>';
			}
			else if($_COOKIE['ID'] === "user123456"){

				echo '<h3>Bienvenue user,</h3>';
                                echo 'Voici votre ID de session: '.htmlspecialchars($_COOKIE['ID']).'<br>';
			}
			else{
				echo "Probeme de connexion! <br>";
			}
		}


	      



                        
?>
        </div>
        </div>
        </div>
    <?php include('./includes/footer.inc.php'); ?>
</div>
</body>
</html>
