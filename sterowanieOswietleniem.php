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
                    <li><input type="checkbox"></li>                    

                    <a>Jadalnia</a>
                    <li><input type="checkbox"></li>

                    <a>Salon</a>
                    <li><input type="checkbox"></li>
                </ul>
            </div>
        </div>
    </div>

</body>
</html>

<!-- 
    
    <script>

        function myFunction() {

            box = document.getElementById("demo");
	            if (box.style.visibility == "visible") box.style.visibility="hidden";
	             else box.style.visibility="visible";
	      }
  
    </script>

     <a>Pokój gościnny</a>
         <li><input type="checkbox" onclick="myFunction()"><p id="demo">Działa</p></li>

-->