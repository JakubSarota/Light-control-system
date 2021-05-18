<?php
	$a- exec("sudo python /var/www/html/led/1off.py");
	echo $a;

	require_once "polaczenie.php";
	$sql = "INSERT INTO `uzytkownicy` VALUES 0";
?>
