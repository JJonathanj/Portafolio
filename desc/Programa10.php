 <?php
 
//Formularios sin base de datos

if(isset($_POST['nombre'])){
	$nombre=$_POST["nombre"];
	$edad=$_POST["edad"];
	$sexo=$_POST["sexo"];
	
	echo "<table>";
		echo "<table border='1'>";
			echo "<tr>";
				echo"<td><h3>Nombre</td></h3>";
					echo "<td><h3>Edad</td></h3>";
						echo "<td><center><h3>Sexo</td></h3></center>";
					echo "<td><h3>Resultado de su edad</td></h3>";
				echo "<tr>";
			echo "<td><center>$nombre</td></center>";
		echo "<td><center>$edad</td></center>";
	echo "<td>$sexo</td>";
		$edad;
		
		if($edad>=18){
		echo "<td>Eres mayor de edad</td>";
		} 
		else {
		echo "<td>Eres menor de edad</td>";
		}
echo "</tr>";
echo"</table>";
}

?>