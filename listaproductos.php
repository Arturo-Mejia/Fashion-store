<?php      
include 'cmysql.php';                
        $conn = conectar(); 
					$sql = "SELECT productos.*,categorias.nombre as nomc FROM productos JOIN categorias ON productos.categoria_id=categorias.id;";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
					// output data of each row
					echo '<h3>Todos los productos</h3>';
                                        echo '<div style="overflow-x:auto;">';
                   echo '<table border="1">
                            <tr>
                            <th style="background-color: black; color: white"> Nombre </th>
                            <th style="background-color: black; color: white"> Descripcion </th>
                            <th style="background-color: black; color: white"> categoria </th>
                            <th style="background-color: black; color: white"> Precio </th>
                            <th style="background-color: black; color: white"> Imagen </th>
                            <th style="background-color: black; color: white">  </th>
                            <th style="background-color: black; color: white">  </th>
                            </tr>';
					while($row = $result->fetch_assoc()) {
                          
                       echo '<tr>
                            <td>'.$row["nombre"].'</td>
                            <td>'.$row["descripcion"].'</td>
                            <td>'.$row["nomc"].'</td>
                            <td>'.$row["precio"].'</td>
                            <td>'.$row["imagen"].'</td>
                            <td><a onclick="editarpro('.$row["id"].')"><img align="center" "width="40px" height="40px" src="src/imagenes/edit.png"</a></td>
                            <td><a onclick="eliminarpro('.$row["id"].')"><img align="center" width="40px" height="40px" src="src/imagenes/delete.png"</a></td>
                            </tr>';
					 }
                     echo '</table>';
                     echo '</div>';

					} else {
					 echo "No hay registro de pedidos";  
					}
				$conn->close();

?>   