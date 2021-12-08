<?php
include 'cmysql.php';
$conn=conectar();
$idU=$_GET["idu"]; 
$idp=$_GET["idp"];

$sql = "SELECT * from carrito where id_usuario='".$idU."' and id_producto='".$idp."';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  $cant=$row["cantidad"]+1;
  $sqlu = "UPDATE carrito SET cantidad='".$cant."' where id_usuario='".$idU."' and id_producto='".$idp."';"; 
  if ($conn->query($sqlu) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
  
} else {
  
  $sql2="INSERT INTO carrito values('".$idU."','".$idp."','1');"; 
  if ($conn->query($sql2) === TRUE) {
    } else {
      echo "Error: " . $sql2 . "<br>" . $conn->error;
    }
  
}
$conn->close();

?>
