<?php
include 'cmysql.php';
$conn=conectar();

$idu=$_GET["idu"]; 
$total=$_GET["total"];
$direc=$_GET["direccionp"]; 
$fecha=$_GET["fecha"];
$tel=$_GET["tel"];
$sql2 = "SELECT * from usuarios where id='".$idu."';";
$result = $conn->query($sql2);
if ($result->num_rows > 0) {
    $row2 = $result->fetch_assoc();
    $nombre=$row2["nombre"]." ".$row2["apellidos"];
    $nombre=ucwords($nombre);
    $sql = "INSERT INTO pedidos VALUES(null,'".$idu."','".$nombre."','".$direc."','".$total."','".$fecha."','pendiente','".$tel."');";
if ($conn->query($sql) === TRUE) {
    $sql3 = "DELETE from carrito WHERE id_usuario='".$idu."';";
    if ($conn->query($sql3) === TRUE){}
    else{echo "Error: " . $sql3 . "<br>" . $conn->error;}
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
} 

?>