<?php
	echo "Uzytkownik: " . get_current_user();
    	echo "Wyjscie: " . shell_exec("sudo python /var/www/html/led/1off.py");
  
?>
