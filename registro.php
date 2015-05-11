<?php include "/secciones/cabecera.php";?><br>
<?php include "/secciones/menu.php";?><br>

<div>

  <a href="">Hola</a>
</div>
<form action="logueo.php" id="frm1" name="frm1" method="POST">
    <div>
      <label for="nombre_usuario">Ingresa tu nombre de usuario</label>
      <input type="text" name="nombre_usuario"class="form-control" placeholder="Nombre de usuario">
    </div>
  <br>
    <div>
      <label for="clave" class="form-control">ingresa tu contraseña</label>
      <input type="text" name="clave"class="form-control" placeholder="Contraseña">
    </div>
    <button type="submit">Enviar</button>
</form>
<br>
<?php include "/secciones/pie.php";  ?>
