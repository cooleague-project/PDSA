<?php

setcookie("id", "", time()-3600);

setcookie("PrivatePageLogin", "", time()-3600);
setcookie("PrivatePageCode", "", time()-3600);
      header('Location: index.php');
	  exit; 
	  ?>