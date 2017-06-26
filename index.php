<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>
Esto es el html;

<?php
	$var = 10;
	echo "Esto es el php".md5($var);
	echo "<br><br>";

	require ('select.php');


?>

<input type="text" id="dinero">
<button id = "act" onclick="request();">ActualizaT</button>
<div id="demo"></div>

</body>
</html>

<script type="text/javascript">
	
	function request() {

	var seleccion = document.getElementById('seleccion');
	var id = seleccion.value;

	var texto = document.getElementById('dinero');
	var dinero = texto.value;

	var url = "update.php";
	url = url + "?id=" + id + "&dinero=" + dinero;

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML =
            this.responseText;
       }
    };
	
	xhttp.open("GET", url, true);
	// xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send(); 
	
	}

</script>
