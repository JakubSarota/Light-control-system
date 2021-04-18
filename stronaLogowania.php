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
    <ul>      
        <li >
            <a href="stronaGlowna.php">POWRÓT</a>
        </li>
     </ul>
     </div>
    <div id="panel">
        <!--Polaczenie do php zaloguj-->
        <form action="zaloguj.php" method="post">
        <!--LOGIN-->
        <label for="username">Login:</label>
        <input type="text" class="pole" id="username" name="username">
        <!--HASLO-->
        <label for="password">Hasło:</label>
        <input type="password" class="pole" id="password" name="password">
        <!--PRZYCISK-->
        <div id="lower">
            <input type="submit" value="Login">
            <div id="blad">
            <?php
                if(isset($_SESSION['Blad'])) {
                    echo $_SESSION['Blad'];
                }
            ?>
            </div
        </div>
        </form>
        
    </div>
    </div>
</body>
</html>