<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Projekt</title>
    <meta name="viewport" content="width=device-width, initial-scale=0.65" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="app.js"></script>
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
                    <!--Pierwszy przycisk--->
                    <a>Pokój gościnny</a>
                    <li><input onclick="switch1()" type="checkbox"></li>  
                    
					Czas rozpoczęcia:
					<input type="time" name="usr_time" />
					Czas zakończenia:
					<input type="time" name="usr_time2" />
					<input type="submit" value="Ustaw" /><br /><br />
                    
                    <!--Drugi przycisk--->
                    <a>Jadalnia</a>
                    <li><input type="checkbox"></li>
					Czas rozpoczęcia:
					<input type="time" name="usr_time" />
					Czas zakończenia:
					<input type="time" name="usr_time2" />
                    <input type="submit" value="Ustaw" /><br /><br />


                    <!--Trzeci przycisk--->
                    <!-- <a>Salon</a>
                    <li><input type="checkbox"></li>
					Czas rozpoczęcia:
					<input type="time" name="usr_time" />
					Czas zakończenia:
					<input type="time" name="usr_time2" />
                    <input type="submit" value="Ustaw" /><br /><br /> -->
		<!--
		<li><button type="button" id="clickOn">on</button></li>
		<li><button type="button" id="clickOff">off</button></li>
		-->
                </ul>
            </div>
        </div>
    </div>

</body>
</html>



