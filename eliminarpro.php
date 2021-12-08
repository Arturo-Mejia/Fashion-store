<?php
include 'cmysql.php';                
$idp=$_GET["idp"];
      $conn = conectar(); 

$sql = "DELETE FROM productos WHERE id='".$idp."';"; 

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>