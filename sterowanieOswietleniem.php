<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Projekt</title>
    <meta name="viewport" content="width=device-width, initial-scale=0.77" />
    <link rel="stylesheet" href="StyleSheet2.css" />

</head>
<body>
    <div class="baner">
        <div class="navbar">
            <img src="./img/logo.png" class="logo" />
            
            <ul>      
                <li >
                    <a href="stronaGlowna.php">POWRÓT</a>
                </li>
                <li><a>
                        <?php
                        echo"<p>Witaj ".$_SESSION['username']."!";
                        ?>
                
                </a></li>
                <li><a href="wyloguj.php">Wyloguj</a></li>
                
            </ul>
        </div>
        <div class="content">
            <div class="pomieszczenia">
                <ul>
                    <a>Pokój gościnny</a>
                    <li><input type="checkbox"></li>                    
					Czas rozpoczęcia:
					<input type="time" name="usr_time" />
					Czas zakończenia:
					<input type="time" name="usr_time2" />
					<input type="submit" value="Wyślij" /><br /><br />
    

                    <a>Jadalnia</a>
                    <li><input type="checkbox"></li>
					Czas rozpoczęcia:
					<input type="time" name="usr_time" />
					Czas zakończenia:
					<input type="time" name="usr_time2" />
                    <input type="submit" value="Wyślij" /><br /><br />

                    <a>Salon</a>
                    <li><input type="checkbox"></li>
					Czas rozpoczęcia:
					<input type="time" name="usr_time" />
					Czas zakończenia:
					<input type="time" name="usr_time2" />
                    <input type="submit" value="Wyślij" /><br /><br />
                </ul>
            </div>
        </div>
    </div>

</body>
</html>



