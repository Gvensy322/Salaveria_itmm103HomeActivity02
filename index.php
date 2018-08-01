<!DOCTYPE html>
<html>
<head>
	
</head>
<body>


<?php

echo "1)";
echo "<br>";
for ($x = 0; $x <= 5; $x++){
	for ($y = 0; $y < $x; $y++){
		echo " * ";
	}
	echo "<br>";
}
echo "<br> <br>";
echo "2)";
echo "<br><br>";
for ($x = 5; $x > 0; $x--){
	for ($y = 0; $y < $x; $y++){
		echo "&nbsp &nbsp";
	}
	
	for ($z = 5; $z >= $x; $z--){
		echo " * ";
	}
	echo "<br>";
}
echo "<br> <br>";
echo "3)";
echo "<br> <br>";
for ($x = 5; $x >= 0; $x--){
	for ($y = 0; $y < $x; $y++){
		echo " * ";
	}
	echo "<br>";
}
echo "4)";
echo "<br><br>";
for ($x = 5; $x >= 0; $x--){
	for($y = 5; $y > $x; $y--){
		echo "&nbsp &nbsp";
	}
		for ($z = 0; $z < $x; $z++){
			echo " * ";
		}
		echo "<br>";
}
?>
<h>Bonus</h>

<form action="https://salaveriaform.herokuapp.com/" method="post">

		Name: <input type="text" name="name">
		<br>
		Date of Birth: <input type="text" name="dateofbirth">
		<br>
		Address: <input type="text" name="address">
		<br>
		Email: <input type="text" name="email">
		<br>
		<br>
		<input type="submit">


</form>



</body>
</html>
















