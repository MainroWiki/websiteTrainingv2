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
          <li  class="selected"><a href="contacts.php">Contact</a></li>
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
        <h1>Contact</h1>
	<hr/>
	
	<div>
	    <span style="text-align: right; float:right;">Statut : <i class="invite">invite</i></span>
	</div><br/>

	        <form action="" method="POST" >
	        <div>
	            Titre&nbsp;:<br/>
	            <input type="text" name="titre" value="" />
	        </div><br/>
	        <div>
	            Message&nbsp;:<br/>
	            <textarea name="message" rows="3" cols="50"></textarea>
	        </div>
	        <div>
	            <input type="submit" value="envoyer" />
	        </div>
        </form><br/><br/>
        <div>
	        <div>Messages postés&nbsp;:</div><br/>
		<span><b>Bienvenu(e)</b></span><br/>
		<span>N'hésitez pas à me laisser un message</span><br/><hr/><br/>
<?php 
	$file = "log.txt";
              
              if (isset($_POST['titre']) && trim($_POST['titre']) !== "") {

              	$titre = $_POST["titre"];

              	if (isset($_POST['message']) && trim($_POST['message']) !== "") {
              		$message = $_POST["message"];
	              	$json["last"] = array("titre"=>$titre,"message" => $message);
			
		}
		else{
			$json["last"] = array("titre"=>$titre,"message" => " ");
		}
		file_put_contents($file, json_encode($json));

              }


	$json = json_decode(file_get_contents($file), true);

	if (isset($json["last"])) {
		echo " <div>";
		echo " <h3><b>Titre : </b>". $json["last"]["titre"] . "</h3>";
		echo " <p> <b>Message : </b>" . $json["last"]["message"] . "</p>";
		echo " </div>";
	}

                        
?>
        </div>
        </div>
        </div>
    <?php include('./includes/footer.inc.php'); ?>
</div>
</body>
</html>
