<h3>Information sur vous</h3>
<?php

	
	
	if(strstr($_SERVER['HTTP_USER_AGENT'], "script"))
		echo"<script>alert('ISILAB{XSS_RefLECted_EsaY}');</script>";
	else
		echo 'Votre navigateur: '.$_SERVER['HTTP_USER_AGENT'].'<br><br>';
	
	echo 'Votre IP: '.$_SERVER['REMOTE_ADDR'].'<br>';
?>
