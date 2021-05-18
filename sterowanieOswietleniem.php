<?php
    session_start();

	$wynik = mysqli_query($link, "SELECT id, Stan FROM oswietlenie1 ORDER BY id DESC LIMIT 0, 1");
	while($row = mysqli_fetch_array($wynik)) {
		$zmienna1 =$row['Stan'];
	}
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
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:600|Teko:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Orbitron:400,700" rel="stylesheet">
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
                    <form method="GET">
                        <!--Pierwszy przycisk--->
                        <a>Pokój gościnny</a>
                        <li><input onclick="switch1()" type="checkbox"></li>
			<!--czujnik przycisk
				<div class="row">
                		<div class="col">
                    			<button type="button" class="btn btn-block btn-dark" id="btnToggle">Turn On</button>
                		</div>
            			</div>
			--->
                        <br/>
                        <!--Drugi przycisk--->
                        <a>Jadalnia</a>
                        <li><input onclick="switch2()" type="checkbox"></li>

			</form>
                </ul>
            </div>
        </div>
    </div>

</body>
</html>



