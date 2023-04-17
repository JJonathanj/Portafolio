<html>
<form action="" method="post">
 <p>Su nombre <input type="text" name="nombre"/></p>
 <p>Su edad <input type="text" name="edad" /></p>
 
 <select name="select">
	<option value="Hombre">Hombre</option>
	<option value="Mujer">Mujer</option>
	<option value="Sin especificar">Sin especificar</option>
 <p><input type="submit" /></p>
</form>
<?php
	$edad=$_POST['edad'];
	$nombre=$_POST['nombre'];
	$sex=$_POST['select'];

	if ( $edad >= 18) {
	echo "$edad";
	echo "<br>";
    echo "Es mayor de edad";
	echo "<br>";
	echo "$nombre";
	echo "<br>";
	echo "$sex";


}
	else{
	echo "$edad";
	echo "<br>";
    echo "Es menor de edad";
	echo "<br>";
	echo "$nombre";
	echo "<br>";
	echo "$sex";
	}
?>
</html>
