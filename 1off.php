<?php
	//$a- exec("sudo python /var/www/html/led/1on.py");
	//echo $a;

	echo "Uzytkownik: " . get_current_user();
    echo "Wyjscie: " . shell_exec("sudo python /var/www/html/led/1off.py");

?>
