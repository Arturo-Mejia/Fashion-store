<?php
 
  session_start();
  if(empty($_SESSION["idu"]))
  {
      echo "0";
  } else
  {
      echo "".$_SESSION["idu"];
  }  
 
?>

