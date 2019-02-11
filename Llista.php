<html> 
<head> 
<title>LListat de llibres</title> 
</head> 
<body> 
<?php 

  $iden = mysqli_connect("localhost", "root", "", "books");

	if (!$iden) {
		die("Connection failed: " . mysqli_connect_error());
	}

  $sentencia = "SELECT Title, Autor FROM Book"; 
  
  $resultado = mysqli_query($iden, $sentencia); 
  if(!$resultado) 
    die("Error: no es pot realitzar la consulta");
	?>
  <table>
			<tr>
				<th>Títol</th>
				<th>Autor</th>
			</tr>
  <?php
  
  while($fila = mysqli_fetch_assoc($resultado)) 
  { 
   echo "<tr>";
   echo "<td>".$fila["Title"]."</td>";
   echo "<td>".$fila["Autor"]."</td>"; 
   echo "</tr>";
  } 
mysqli_close($iden);
	?> 
</table>
</body> 
</html>