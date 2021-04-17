<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Projekt</title>
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
            <div>
                <button type="button" onclick="location.href='sterowanieOswietleniem.php'"><span></span>Sterowanie</button>
                <button type="button"><span></span>Statystyki</button>
            </div>
        </div>
    </div>
</body>
</html>