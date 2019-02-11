<html> 
<head> 
<title>LListat d'editorials</title> 
</head> 
<body> 
<?php 

  $iden = mysqli_connect("localhost", "root", "", "books");

  $sentencia = "SELECT DISTINCT Editorial, Autor FROM book"; 
  
  $resultado = mysqli_query($iden, $sentencia); 
  if(!$resultado) 
    die("Error: no es pot realitzar la consulta");
	?>
  <table>
			<tr>
				<th>Editorial</th>
				<th>Autor</th>
			</tr>
  <?php
  
  while($fila = mysqli_fetch_assoc($resultado)) 
  { 
   echo "<tr>";
   echo "<td>".$fila["Editorial"]."</td>";
   echo "<td>".$fila["Autor"]."</td>"; 
   echo "</tr>";
  } 
mysqli_close($iden);
	?> 
</table>
</body> 
</html>