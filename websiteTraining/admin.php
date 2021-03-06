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
	        <li><a href="connexion.php">Connexion</a></li>
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

      <h1>Espace Administrateur</h1>

      <?php
      //Connexion db
      include("includes/connexion_db.inc2.php");

      function valid($a){
        return isset($a) && is_string($a) && $a !='';
      }

      if( valid($_GET['password'])){
        $p = $_GET['password'];
        if ($auth = $mysqli->query("SELECT * from users where id=1 and password='".$p."'")){
          if ($auth->num_rows==1){
            $flag = $mysqli->query("SELECT flag from flagsqliauth where id=1")->fetch_assoc();
            echo '<p>Bien joué, voici le flag: '.$flag['flag'].'<br />';
            echo 'Il reste une injection SQL dans cette section mais elle est plus difficile.<br />';
            echo 'Tu as réussi à passer outre ce mot de passe, mantenant il faut le trouver.</p><br /><br />';
            echo 'Indice: Voici la requête</br>';
            echo '<code>SELECT * from users where id=1 and password=\'.$pass.\'</code>';
          } else {
            echo 'Mauvais mot de passe.';
          }

        } else {
          echo 'Une erreur est survenue lors de la requête mysql.';
        }
      } else {
      ?>

        <p> Veuillez vous authentifier </p>
        <form action="">

         <div class="container">
           <label><b>Mot de passe</b></label>
           <input type="password" name="password" required>

           <button type="submit">Login</button>
         </div>

       </form>
      <?php } ?>

		</div>
    </div>
    <?php include('./includes/footer.inc.php'); ?>
  </div>
</body>
</html>
