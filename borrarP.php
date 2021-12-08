<?php
include 'cmysql.php';                
$idp=$_GET["idp"];
$idu=$_GET["idu"];
      $conn = conectar(); 

$sql = "DELETE FROM carrito WHERE id_producto='".$idp."' and id_usuario='".$idu."';"; 

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>