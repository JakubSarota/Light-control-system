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
            <div class="pomieszczenia">
                <ul>
                    <a>Pokój gościnny</a>
                    <li><a><br />Włączony od: 20 min</a></li>                    
					<hr style="width: 20%; margin: auto;" /><br /><br />

                    <a>Jadalnia</a>
                    <li><a><br />Włączony od: 30 min</a></li>
                    <hr style="width: 20%; margin: auto;" /><br /><br />

                    <a>Salon</a>
                    <li><a><br />Włączony od: 1 godz 13 min</a></li>
                    <hr style="width: 20%; margin: auto;" /><br /><br />
                </ul>
            </div>
        </div>
    </div>

</body>
</html>