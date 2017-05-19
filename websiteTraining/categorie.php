

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

          <h1><a href="index.php">Training<span class="logo_colour">ISI</span></a></h1>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">

          <li ><a href="index.php">Home</a></li>
          <li class="selected"><a href="categorie.php">Catégories</a></li>
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
        <h1>Categories</h1>
        <p>
			Voici ce que nous vendons à nos clients pour qu'ils puissent collecter des données:
			<ul>
				<li><a href="?page=pages/script_donnees.php">Liste de scripts</a></li>
				<li><a href="?page=pages/liste_clients.php"> Liste des clients </a></li>
			</ul>

			<?php

						if(isset($_GET['page']) && !empty($_GET['page']))
						{
							$page=$_GET['page'];

							if($page[0]=='p' && $page[1]=='a' && $page[2]=='g' && $page[3]=='e' && $page[4]=='s' /*&& strpos($_GET['page'], '../') === false*/){
								if(strpos($page,"../../") !== false)
									include($page);
								elseif(strpos($page,"../") === false)
									include($page);
								else
									echo "Tentative de hack !";
							}
							else
								echo "Tentative de hack !";


						}
			?>


			</p>

		</div>
    </div>
    <?php include('./includes/footer.inc.php'); ?>
  </div>
</body>
</html>



