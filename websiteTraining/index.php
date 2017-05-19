


<!DOCTYPE HTML>
<html>
<?php $FLAGS="ISILAB{LFI_Is_GrEat_gUy}"; // I should remove it...
?>
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
          <li class="selected"><a href="index.php">Home</a></li>
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
        <!-- insert the page content here -->
        <h1>Informations</h1>
        <p>
			
			Nous sommes une entreprise qui aidons pour la collecte de données personnelles.
			Nous distribuons des scripts permettant d'analyser et d'extraire des données.
			Tout le monde peut uploader des scripts afin que notre database grandisse. 
			Nous travaillons aussi avec des organisations gouvernementales.<br>
			
			<h4><strong>N'essayez pas de nous attaquer car nous savons qui vous êtes.</strong></h4>
			
		</p>
		
		</div>
    </div>
    <?php include('./includes/footer.inc.php'); ?>
  </div>
</body>
</html>
