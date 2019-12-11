<?php

session_start();

?>

Dobrodošli u trgovinu <?=$_SESSION['moja_var']?> vaš trenutni iznos na računu je <br>
<?=$_SESSION['saldo']?>.

Želite li kupiti ugly sweather (9.99)? <a href="session3.php">DA</a>

<form method="POST" action="session3.php">
    Komada: <input type="number" name="komada" value="0" max="5" min="0"><br>
    <input type="hidden" name="cijena" value="9.99">
    <input type="submit" name="kupi_btn" value="kupi">
</form>

