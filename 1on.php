<?php	
	echo "Uzytkownik: " . get_current_user();
    	echo "Wyjscie: " . shell_exec("sudo python /var/www/html/led/1on.py");

	$conn = mysqli_connect('localhost', 'admin', '123', 'projekt')
	or die('Brak po��czenia z serwerem MySQL.<br />B��d: '.mysql_error());
	echo "Uda�o si� po��czy� z serwerem!<br />";

	$date_clicked = date('Y-m-d H:i:s');

	$sql=$conn->query("INSERT INTO statystyki (czas)
	VALUES
	('$date_clicked')");   

    	$wynik = mysqli_query($conn, $sql);
?>
