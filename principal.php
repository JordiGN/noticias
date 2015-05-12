<?php
    session_start("conexion.php");
    if (!isset($_SESSION['logueado']))
     {
      header('location: http://localhost:8080/noticias/index.php');
    }
    include 'menu.php';?>
    <div class="container">
      <h1>asdnaslkdnas</h1>
    </div>
<?php include 'pie.php'; ?>
