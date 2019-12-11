<?php

setcookie('var1', '1234', time()+60*60*24*30); //nestat će za mjesec dana
setcookie('var2', '987654321', time()+20);  //nesatliza 20 sec!
?>

<a href="cookie_two.php">two</a>
