<?php

setcookie('var1', '1234', time()-1); //nestat će za mjesec dana
setcookie('var2', '987654321', time()-1);  //nesatliza 20 sec!
header('Location:cookie_two.php');
die();