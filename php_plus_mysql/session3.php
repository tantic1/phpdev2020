<?php

session_start();
?>

Trenutno stanje vašeg salda je <?=$_SESSION['saldo']?>.<br>

Kupili ste <?=$_POST['komada']?> po cijeni <?=$_POST['cijena']?><br>
<hr>
Ukupan račun je <?=($_POST['komada']*$_POST['cijena'])?><br>


<?php
$_SESSION['saldo']=-$_POST['komada']*$_POST['cijena'];
?>

Novi saldo na Vašem računu je:<?=$_SESSION['saldo']?>;
<br>

<a href="session_prva.php">Vrati me na početak</a>
<a href="session_kill.php">zatvori session</a>