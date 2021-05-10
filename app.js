var toggled1 = false;
function switch1() {
    if(!toggled1) {
        toggled1 = true;
		var a = new XMLHttpRequest();
		a.open("GET", "on.php");
		a.onreadystatechange=function() {
			if(a.readyState==4) {
				if(a.status==200) {
				} else
				{ console.log("blad"); }			
			}	
		}
		a.send();
		return;
	}
	

    if(toggled1) {
        toggled1 = false;
        	var a = new XMLHttpRequest();
		a.open("GET", "off.php");
		a.onreadystatechange=function() {
			if(a.readyState==4) {
				if(a.status==200) {
				} else
				{ console.log("blad"); }			
			}	
		}
		a.send();
 		return;	
	}
}

/*
$(document).ready(function() {
	
	$('#clickOn').click(function() {
		var a = new XMLHttpRequest();
		a.open("GET", "on.php");
		a.onreadystatechange=function() {
			if(a.readyState==4) {
				if(a.status==200) {
				} else
				{ console.log("blad"); }			
			}		
		}
		a.send();
	});


	$('#clickOff').click(function() {
		var a = new XMLHttpRequest();
		a.open("GET", "off.php");
		a.onreadystatechange=function() {
			if(a.readyState==4) {
				if(a.status==200) {
				} else
				{ console.log("blad"); }			
			}		
		}
		a.send();
	});
});
*/
