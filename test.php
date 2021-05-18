<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Projekt</title>
    <meta name="viewport" content="width=device-width, initial-scale=0.65" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="app.js"></script>
    <link rel="stylesheet" href="StyleSheet2.css" />
</head>
<body>
    <div class="baner">
        <div class="navbar">
            <img src="./img/logo.png" class="logo" />
            
            <ul>      
                                <li><a>
                                        
                </a></li>
                
                
            </ul>
        </div>
        <div class="content">
            <div class="pomieszczenia">
                <ul>
                    <form method="GET">

                        <!--Pierwszy przycisk--->
                        <a>Pokój gościnny</a>
                        <li><input onclick="switch1()" type="checkbox"></li>  
                                                                        
                        <!--Drugi przycisk--->
                        <a>Jadalnia</a>
                        <li><input type="checkbox"></li>
                        
                                      
                        
                        <li><button type="button" onClick="switch1()">on</button></li> 
                       	<li><button type="button" onClick="<? exec('python off.py'); ?>">off</button></li>
						
			<input type="button" id='script' name="scriptbutton" value=" Run Script " onclick="goPython()">

    			<script>
        			function goPython(){
            			$.ajax({
              			url: "on.py",
             			context: document.body
            		}).done(function() {
             			alert('finished python script');
            		});
        		}
   			</script>

			</form>
                </ul>
            </div>
        </div>
    </div>

</body>
</html>



