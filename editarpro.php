<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Editar producto</title>
    <style>
    form
    {
        margin: 5%;
    }
    a
    {
        background-color: darkviolet;
        color: white;
        padding: 10px;
        margin-top: 5px;
    }
    a:hover
    {
        color: white;
    } 

    </style>
</head>
<body>
<form>
<h1>Editar producto</h1>  
  
  <?php
  include 'cmysql.php'; 

  function actualizar()
  {
      if(isset($_GET["img"]))
      { 
        $conn=conectar();
        $sql = "update productos set categoria_id='".$_GET["idcat"]."', nombre='".$_GET["nom"]."', descripcion='".$_GET["desc"]."', precio='".$_GET["precio"]."', imagen='".$_GET["img"]."' where id='".$_GET["idp"]."';";
        if($conn->query($sql) === TRUE) {
          echo '<h5 style="color:blue;">Datos actualizados</h5>';
        } else {
          echo "Error en las actualización: " . $conn->error;
        }
        $conn->close();
      } else
       {
       }
  }  

  actualizar(); 
  $conn=conectar();
  $sql = "SELECT * from productos where id=".$_GET["idp"];
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      ?>  
     <div class="form-group">
    <input type="hidden" class="form-control" id="idp" value=<?php echo '"'.$_GET["idp"].'"'?>>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Id categoria</label>
    <input type="text" class="form-control" id="categoriaid" value=<?php echo '"'.$row["categoria_id"].'"'?>>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Nombre</label>
    <input type="text" class="form-control" id="nombre" value=<?php echo '"'.$row["nombre"].'"'?>>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Descripcion</label>
    <input type="text" class="form-control" id="descripcion" value=<?php echo '"'.$row["descripcion"].'"'?>>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Precio</label>
    <input type="text" class="form-control" id="precio" value=<?php echo '"'.$row["precio"].'"'?>>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Url imagen</label>
    <input type="text" class="form-control" id="imagen" value=<?php echo '"'.$row["imagen"].'"'?>>
  </div> 

  <div class="form-group">
    <a href="" onclick="actualizarp()">Actualizar datos</a>
  </div>
    <?php
    }
  } else {
    echo "0 results";
  }
  $conn->close();
  
  ?>
</form>

<script>
function actualizarp()
{   
   
   if(document.getElementById("categoriaid").value=="" || document.getElementById("nombre").value=="" || document.getElementById("descripcion").value=="" || document.getElementById("precio").value=="" || document.getElementById("imagen").value=="")
   {
     alert("Ingrese todos los datos para realizar la actualización");
   } else
   {
    let idp=document.getElementById("idp").value;
    let idcat=document.getElementById("categoriaid").value;
    let nom=document.getElementById("nombre").value;
    let desc=document.getElementById("descripcion").value;
    let precio=document.getElementById("precio").value;
    let img=document.getElementById("imagen").value;
    window.open("editarpro.php?idp="+idp+"&idcat="+idcat+"&nom="+nom+"&desc="+desc+"&precio="+precio+"&img="+img); 
    this.window.close();  
   }
   
}
</script>
</body>
</html>