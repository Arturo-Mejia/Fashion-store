<?php
include 'cmysql.php';
$conn=conectar();
$nombre=$_GET["nombre"];
$apellidos=$_GET["apellido"];
$correo=$_GET["correo"];
$contraseña=$_GET["contraseña"];

$sql="INSERT INTO usuarios VALUES(null,'".$nombre."','".$apellidos."','".$correo."','".$contraseña."','','');";
if ($conn->query($sql) === TRUE) { 
  echo 'registrado';
  } else {
    echo "Error: ".$conn->error;
  }
  
  $conn->close();
?>