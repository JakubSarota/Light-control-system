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
    <div id="panel">
        <!--Polaczenie do php zaloguj-->
        <form action="zaloguj.php" method="post">
        <!--LOGIN-->
        <label for="username">Login:</label>
        <input type="text" id="username" name="username">
        <!--HASLO-->
        <label for="password">Hasło:</label>
        <input type="password" id="password" name="password">
        <!--PRZYCISK-->
        <div id="lower">
            <input type="submit" value="Login">
            <?php
                if(isset($_SESSION['Blad'])) {
                    echo $_SESSION['Blad'];
                }
            ?>
        </div>
        </form>
        
    </div>
</body>
</html>