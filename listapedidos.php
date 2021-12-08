<?php      
include 'cmysql.php';                
        $conn = conectar(); 
					$sql = "SELECT * FROM pedidos;";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
					// output data of each row
					echo '<h3>Todos los pedidos</h3>';
                                        echo '<div style="overflow-x:auto;">';
                   echo '<table style="width: 100%;" border="1">
                            <tr>
                            <th style="background-color: black; color: white"> ID </th>
                            <th style="background-color: black; color: white"> Nombre </th>
                            <th style="background-color: black; color: white"> Dirección </th>
                            <th style="background-color: black; color: white"> telefono </th>
                            <th style="background-color: black; color: white"> fecha </th>
                            <th style="background-color: black; color: white"> Total </th>
                            <th style="background-color: black; color: white"> Estado </th>
                            </tr>';
					while($row = $result->fetch_assoc()) {
                          
                       echo '<tr>
                            <td>'.$row["id"].'</td>
                            <td>'.$row["nombre"].'</td>
                            <td>'.$row["direccion"].'</td>
                            <td>'.$row["telefono"].'</td>
                            <td>'.$row["fecha"].'</td>
                            <td>'.$row["total"].'</td>
                            <td>'.$row["estado"].'</td>
                            </tr>';
					 }
                     echo '</table>';
                     echo '</div>';

					} else {
					 echo "No hay registro de pedidos";  
					}
				$conn->close();

?>   