<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Projekt</title>
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
            <div>
                <ul>
                    <a>Pokój gościnny</a>
                    <li><button><span></span>Włacz</button></li>
                    <li><button><span></span>Wyłacz</button></li>
                    <a>Jadalnia</a>
                    <li><button><span></span>Włacz</button></li>
                    <li><button><span></span>Wyłacz</button></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>