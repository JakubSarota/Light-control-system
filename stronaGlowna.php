<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Projekt</title>
    <meta name="viewport" content="width=device-width, initial-scale=0.8" />
    <link rel="stylesheet" href="StyleSheet1.css" />

</head>
<body>
    <div class="baner">
        <div class="navbar">
            <img src="./img/logo.png" class="logo" />
            <ul>           
                <li><a>
                        <?php
                        echo"<p>Witaj ".$_SESSION['username']."!";
                        ?>
                </a></li>
                <li><a href="wyloguj.php">Wyloguj</a></li>
            </ul>
        </div>
        <div class="content">
        <h1>Oświetl swój dom</h1>
            <p>Wyobraź sobie, że jednym dotknięciem wyłączasz wszystkie światła. Poczuj magię kina we własnym salonie <br />dzięki potędze kolorów. Albo ustaw optymalne światło, które pomoże Ci się skoncentrować lub odpocząć po długim dniu… <br />Nawet kiedy jesteś poza domem, możesz zaprogramować oświetlenie tak, by symulować obecność.</p>
            <div>   
                <button type="button" onclick="location.href='sterowanieOswietleniem.php'"><span></span>Sterowanie</button>
                <button type="button" onclick="location.href='stronaStatystyki.php'"><span></span>Statystyki</button>
            </div>
        </div>
    </div>
</body>
</html>