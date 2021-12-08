<?php
include 'cmysql.php';
$conn=conectar(); 
$sql = "SELECT id from productos ORDER BY id DESC ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
    $idp=$row["id"]+1;
} else {
  echo "0 results";
}

$sql2 = "insert into productos values('".$idp."','".$_GET["categoriaid"]."','".$_GET["nombre"]."','".$_GET["descripcion"]."','".$_GET["precio"]."','".$_GET["imagen"]."');";
if ($conn->query($sql2) === TRUE) {
  echo "correcto";
} else {
  echo "Error: " . $sql2 . "<br>" . $conn->error;
}

$conn->close();
?>