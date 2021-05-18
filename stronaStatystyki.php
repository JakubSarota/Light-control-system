<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Projekt</title>
    <meta name="viewport" content="width=device-width, initial-scale=0.65" />
    <link rel="stylesheet" href="StyleSheet2.css" />

</head>
<body>
    <div class="baner">
        <div class="navbar">
            <img src="./img/logo.png" class="logo" />
            
            <ul>      
                <li >
                    <a href="stronaGlowna.php">POWR√ìT</a>
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
                    <a>Pok√≥j go≈õcinny</a>
                    <li>
                    <div id="sh">Logi</div>
                    <div id="ukryty_tekst">
                         <?php

                         $conn = mysqli_connect('localhost', 'admin', '123', 'projekt')
                        or die('Brak po≥πczenia z serwerem MySQL.<br />B≥πd: '.mysql_error());
                        echo "";

                         $wlaczono = $conn->query("SELECT czas FROM statystyki ORDER BY id DESC LIMIT 5;");

                        if($wlaczono->num_rows>0){

                        while($wynik=$wlaczono->fetch_assoc()){
                            echo "Wlaczono o godzinie: ". $wynik["czas"]."<br>";
                        }
                    }
                ?>
            </div>            
            </li><br><br>
            
                    <a>Jadalnia</a>
                    <li>
                    <div id="sh">Logi</div>
                   </li><br>


                    <a>Salon</a>
                    <li>                     
                    <div id="sh">Logi</div>
                </li>                   
                </ul>
            </div>
        </div>
    </div>

    <script>

var div = document.getElementById('ukryty_tekst');

div.style.display = 'none';
document.getElementById('sh').innerHTML = 'Logi';

document.getElementById('sh').onclick = function()
{
    if(div.style.display == 'none')
    {
        div.style.display = 'block';
        this.innerHTML = 'Logi';
    }
    else
    {
        div.style.display = 'none';
        this.innerHTML = 'Logi';
    }
};

</script>

</body>
</html>

