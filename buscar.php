<?php      
include 'cmysql.php';                
  $buscar=$_GET["buscar"];
        $conn = conectar(); 
					$sql = "SELECT * FROM productos where nombre LIKE '%".$buscar."%';";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
					// output data of each row
					echo '<h1>Resultados</h1>';
					while($row = $result->fetch_assoc()) {
						?>
						<div class="product">
						<img src="<?php print $row["imagen"]; ?>" />
						<h2><?php print $row["nombre"]; ?></h2>
						<p><?php print $row["precio"]. ' MXN'; ?></p>
						<form>
                    	<input type="hidden" name="idp" value="<?php print $row["id"];?>">
						<a class="button" onclick="agregarC('<?php print $row['id'];?>');">Comprar</a>
                  		</form>
						</div>
                    <?php
					 }
					} else {
					 echo "No se encontró ningún producto";  
					}
				$conn->close();
 
?>    