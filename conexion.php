<?php
$servidor="localhost";
$usuario="root";
$contrasena="";
$basedatos="mailport";

//creamos la conexión a la base de datos//
$conexion=mysqli_connect($servidor, $usuario, $contrasena, $basedatos);
//comprobaremos nuestra conexión
if(!$conexion){
  die("error en la conexion:" . mysqli_connect_error());
}


?>