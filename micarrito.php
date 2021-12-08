<?php      
include 'cmysql.php';                
  $idu=$_GET["idu"];
        $conn = conectar(); 
		$total=0;
					$sql = "SELECT * FROM carrito where id_usuario='".$idu."';";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
					// output data of each row
					echo '<h1>Mi carrito</h1>';
					while($row = $result->fetch_assoc()) {
						$cant=$row["cantidad"];
                        $idp=$row["id_producto"];
                        $sql2 = "SELECT * FROM productos where id='".$idp."';";
					$result2 = $conn->query($sql2);
					if ($result2->num_rows > 0) {
					// output data of each row
				    $row2 = $result2->fetch_assoc();
						$total=$total+($row2["precio"]*$cant);
						?>
						 <div class="product">
						<img src="<?php print $row2["imagen"]; ?>" />
						<h2><?php print $row2["nombre"]; ?></h2>
						<p><?php print "$".$row2["precio"]. ' MXN'; ?></p>
                        <p><?php print 'Cantidad: '.$cant; ?></p>
						<a class="button borrar" onclick="borrar('<?php print $row2['id'];?>');">borrar</a>
						</div>
                    <?php
					 }
					}
                    echo '<div class="form-group">
					<input id="direccionp" type="text" class="form-control"  placeholder="Ingrese su dirección">
                  </div>
				  <div class="form-group">
				  <input id="telefonop" type="text" class="form-control" placeholder="Ingrese su número telefónico">
                  </div>
                  <input class="button" type="button" value="Hacer pedido" onclick="hacer_pedido()"/>
				  <br><strong><h5 style="color: green;">total: $'.$total.' MXN</h5></strong>
				  <input id="totalp" type="hidden" value="'.$total.'">';
                 } else {
					 echo "Aún no agrega ningún producto a su carrito";  
					}
				$conn->close();
 
?>                         