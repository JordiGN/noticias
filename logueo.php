<?php
include_once("conexion.php");

$cta =$_POST['nombre_usuario'];
$cve =$_POST['clave'];

$sql="SELECT * FROM usuarios WHERE nombre_usuario = '".$cta."' and clave='".$cve."'";
echo $sql;

$query = mysql_query($sql,$con);

echo $query;
echo "prueba";
$fila = mysql_fetch_object($query);


if ($fila && isset($fila->id_usuario)){
  include_once("secciones/cabecera.php"); ?>

      <section id="entro">
        <span>Usuario encontrado</span>
        <a href="index.php">Continuar</a>
      </section>

      <?php include_once("secciones/pie.php");

 }else{

echo "No encontro";
  }

 ?>

