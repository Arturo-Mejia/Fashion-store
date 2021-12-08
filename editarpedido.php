<?php      
include 'cmysql.php';                
        $conn = conectar(); 

        $idp=$_GET["idp"];
        $ne=$_GET["ne"];
$sql = "UPDATE pedidos SET estado='".$ne."' WHERE id='".$idp."';";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>