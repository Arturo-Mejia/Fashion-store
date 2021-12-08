<?php
include 'cmysql.php';
$conn=conectar();

$correo=$_GET["email"];
$contraseña=$_GET["password"];

$sql="SELECT * FROM usuarios WHERE email='".$correo."' AND password='".$contraseña."';";
$result = $conn->query($sql);
		if ($result->num_rows > 0)
        { 
        $row = $result->fetch_assoc();
         echo "".$row["id"];
		 session_start();
		 $_SESSION["idu"]=$row["id"];
		} else 
            {
			 echo "El correo y contraseña no coinciden";  
			}
			$conn->close();  
?>