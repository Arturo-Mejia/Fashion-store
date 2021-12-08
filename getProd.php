<?php 
    include 'cmysql.php';

	$op=$_GET["op"];

	if (isset($_GET['categoria'])) {
		$categoria=$_GET["categoria"];
	}

		if($op == "categoria")
		{
			$conn = conectar(); 
					$sql = "SELECT * FROM productos where categoria_id='".$categoria."';";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						?>
						<div class="product">
						<img src="<?php print $row["imagen"]; ?>" />
						<h2><?php print $row["nombre"]; ?></h2>
						<p><?php print "$".$row["precio"]. ' MXN'; ?></p>
						<form>
                    	<input type="hidden" name="idp" value="<?php print $row["id"];?>">
						<a class="button" onclick="agregarC('<?php print $row['id'];?>');">Comprar</a>
                  		</form>
						</div>
                    <?php
					 }
					} else {
					 echo "Sin resultados";  
					}
				$conn->close();

		}
    

        if($op == "todos")
		{
			$conn = conectar(); 
			$sql = "SELECT * FROM productos;";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				?>
				<div class="product">
				<img src="<?php print $row["imagen"]; ?>" />
				<h2><?php print $row["nombre"]; ?></h2>
				<p><?php print "$".$row["precio"]. ' MXN'; ?></p>
				<form>
				<input type="hidden" name="idp" value="<?php print $row["id"];?>">
				<a class="button" onclick="agregarC('<?php print $row['id'];?>');">Comprar</a>
				  </form>
				</div>
			<?php
			 }
			} else {
			 echo "Sin resultados";  
			}
		$conn->close();
		}
       
		if($op == "destacados")
		{
			$conn = conectar(); 
			$sql = "SELECT * FROM productos ORDER BY RAND() LIMIT 9";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				?>
				<div class="product">
				<img src="<?php print $row["imagen"]; ?>" />
				<h2><?php print $row["nombre"]; ?></h2>
				<p><?php print "$".$row["precio"]. ' MXN'; ?></p>
				<form>
				<input type="hidden" name="idp" value="<?php print $row["id"];?>">
				<a class="button" onclick="agregarC('<?php print $row['id'];?>');">Comprar</a>
				  </form>
				</div>
			<?php
			 }
			} else {
			 echo "Sin resultados";  
			}
		$conn->close();
		}
       
?> 