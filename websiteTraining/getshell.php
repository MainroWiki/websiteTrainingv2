<?php

  /*
       Goal : Get your web shell on the server. 
  */

        if(isset($_COOKIE["shell"])) {
                
                $key = base64_decode($_COOKIE["shell"]);
                
                if($key === "givemeshell"){
                        echo $_SERVER['HTTP_USER_AGENT'];                       
                        system("echo ".$_SERVER['HTTP_USER_AGENT']." >> /tmp/visitors.txt");
                }
        }       
        

?>
