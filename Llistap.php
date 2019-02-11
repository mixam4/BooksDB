<html> 
<head> 
<title>LListat de llibres amb preu inferior a 15€</title> 
</head> 
<body> 
<?php 

  $iden = mysqli_connect("localhost", "root", "", "books");
 
	if (!$iden) {
		die("Connection failed: " . mysqli_connect_error());
	}

  $sentencia = "SELECT Title, Autor, Price FROM Book WHERE (Price <15)"; 
  
  $resultado = mysqli_query($iden, $sentencia); 
  if(!$resultado) 
    die("Error: no es pot realitzar la consulta");
	?>
  <table>
			<tr>
				<th>Títol</th>
				<th>Autor</th>
				<th>Price</th>
				<th>IVA (21%)</th>
				<th>Total</th>
			</tr>
			
  <?php

  while($fila = mysqli_fetch_assoc($resultado)) 
  { 
			
   echo "<tr>";
   echo "<td>".$fila["Title"]."</td>";
   echo "<td>".$fila["Autor"]."</td>";
   echo "<td>".$fila["Price"]."</td>"; 
   $iva = ($fila["Price"])*(0.21);
   echo "<td>".$iva."</td>"; 
   $total = $fila["Price"]+$iva;
   echo "<td>".$total."</td>"; 
   echo "</tr>";
  } 
  
mysqli_close($iden);
	?> 

</table>



</body> 
</html>