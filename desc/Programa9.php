<html>

<body>

<h1>Tabla de multiplicar</h1>

<form action="Programa9.php" method="post">
<input type="number" min="1" name="NumG" required>
<input type="submit" value="Crear tabla">
</form>

<?php

		if(isset($_POST['NumG']))
		{
			$nmin = $_POST['NumG'];
			echo "<table border='1'><br>";
			echo "Tabla del $nmin ";
			
			for($i=1; $i <= 10; $i++)
			{
				$valor = $i*$nmin;
				echo "<tr>";
				echo "<td>&nbsp; $i X $nmin &nbsp;</td>";
				echo "<td>&nbsp; $valor &nbsp;</td>";
				echo "</tr>";
			}
			
			echo "</table>";
			
		}

?>


</body>
</html>