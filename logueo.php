<?php
include_once("conexion.php");

$cta =$_POST['nombre_usuario'];
$cve =$_POST['clave'];

$sql="SELECT * FROM usuarios WHERE nombre_usuario = '".$cta."' and clave='".$cve."'";

$query = mysql_query($sql,$con);

echo $query;
echo "prueba";
$fila = mysql_fetch_object($query);


if (isset($fila->id_usuario)){

  include_once("secciones/cabecera.php");

        $_SESSION['logueado']=true;
        $_SESSION['usuario']=$fila->nombre_usuario;
        header('location: http://localhost:8080/noticias/principal.php');

     include_once("secciones/pie.php");


 }else{

echo "No encontro";
  }

 ?>

