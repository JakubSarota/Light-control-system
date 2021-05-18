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
<script>
var toggled1 = false;
var toggled2 = false;
function switch1() {
    if(!toggled1) {
	console.log("Wlaczono przycisk pierwszy");
        toggled1 = true;
        var xhr = new XMLHttpRequest();
        var url = "1on.php";
        xhr.open("POST", url, true);
        xhr.send();
        return;
	}

    if(toggled1) {
	console.log("Wylaczono przycisk pierwszy");
        toggled1 = false;
        var xhr = new XMLHttpRequest();
        var url = "1off.php";
        xhr.open("POST", url, true);
        xhr.send();

 	return;
	}
}

function switch2() {
    if(!toggled2) {
	console.log("Wlaczono przycisk drugi");
        toggled2 = true;
        var xhr = new XMLHttpRequest();
        var url = "2on.php";
        xhr.open("POST", url, true);
        xhr.send();
		
        return;
	}

    if(toggled2) {
	console.log("Wylaczono przycisk drugi");
        toggled2 = false;
        var xhr = new XMLHttpRequest();
        var url = "2off.php";
        xhr.open("POST", url, true);
        xhr.send();

 	return;
	}
}

</script>
</body>
</html>



