var toggled1 = false;
var toggled2 = false;
function switch1() {
    if(!toggled1) {
        toggled1 = true;
        var xhr = new XMLHttpRequest();
        var url = "1on.php";
        xhr.open("POST", url, true);
        xhr.send();
        return;
	}

    if(toggled1) {
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
        toggled2 = true;
        var xhr = new XMLHttpRequest();
        var url = "2on.php";
        xhr.open("POST", url, true);
        xhr.send();
		
        return;
	}

    if(toggled2) {
        toggled2 = false;
        var xhr = new XMLHttpRequest();
        var url = "2off.php";
        xhr.open("POST", url, true);
        xhr.send();

 	return;
	}
}
