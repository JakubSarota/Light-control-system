<?php
	echo "Uzytkownik: " . get_current_user();
    	echo "Wyjscie: " . shell_exec("sudo python /var/www/html/led/2on.py");
	
	echo "Uzytkownik: " . get_current_user();
    	echo "Wyjscie: " . shell_exec("sudo python /var/www/html/led/czujka.py"); 

?>
