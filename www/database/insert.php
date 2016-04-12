<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nombre=$_POST['nombre'];
 $contrasena=$_POST['contrasena'];
 $q=mysql_query("INSERT INTO `usuarios` (`nombre`,`contrasena`) VALUES ('$nombre','$contrasena')");
 if($q)
  echo "ok";
 else
  echo "error";
 }
 ?>