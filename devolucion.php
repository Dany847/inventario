 <?php 
 session_start();
 if ($_SESSION['validar'] ==1  || $_SESSION['validar'] ==2) {
?>
<!DOCTYPE html>
<?php
require_once 'connect.php';
?>
<html lang="en">
<head>
  <title>DEVOLUCIÓN</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
  <link rel="stylesheet" href="css/uniform.css" />
  <link rel="stylesheet" href="css/select2.css" />
  <link rel="stylesheet" href="css/matrix-style.css" />
  <link rel="stylesheet" href="css/matrix-media.css" />
  <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
  <?php
  include('menu.php');
  ?>
  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> INICIO</a> <a href="#" class="current">DEVOLUCIÓN</a> </div>
      <h1>DEVOLUCIÓN</h1>
    </div>
    <div class="container-fluid">
      <hr>
      <div class="row-fluid">
        <div class="span12">

          <a href="pdf_prestamo.php" target="_blank" class="btn btn-success btn-sm">Generar pdf</a>
           <a href="historial.php" target="_blank" class="btn btn-warning btn-sm">Ver historial</a>
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h5>LISTA DE EQUIPOS PRESTADO</h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>Usuario</th>
                    <th>Descripción</th>
                    <th>Estado</th>
                    <th>Fecha prestado</th>
                    <th>Acción</th>
                  </tr>
                </thead>

                <tbody>
                 <?php
                 $qregreso = $conn->query("SELECT * FROM `prestamo` ORDER BY idprestamo desc") or die(mysqli_error());
                 while($fregreso = $qregreso->fetch_array()){
                  ?>
                  <tr>
                    <td>
                      <?php
                      $qestudiante = $conn->query("SELECT * FROM `usuarios` WHERE `idusuario` = '$fregreso[idusuario]'") or die(mysqli_error());
                      $festudiante = $qestudiante->fetch_array();
                      echo $festudiante['nombre'];
                      ?>
                    </td>
                    <td>
                      <?php
                      $libro = $conn->query("SELECT * FROM `materiales` WHERE `idmaterial` = '$fregreso[idmaterial]'") or die(mysqli_error());
                      $fila = $libro->fetch_array();
                      echo $fila['descripcion'];
                      ?>
                    </td>

                    <td><?php echo $fregreso['estado']?></td>
                    <td><?php echo $fregreso['f_prestado']?></td>
                    <td>
                        <center><button onclick="preguntar(<?php echo $fregreso['idprestamo']?>)" class = "btn btn-primary btn-sm" type = "button" href = "#" data-toggle = "modal" data-target = "#regreso"><span class = "glyphicon glyphicon-check"></span> Devolver</button></center>
                    </td>
                  </tr>
                  <?php
                }
                ?>
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2021 &copy; TecNM campus Tecomatlán</a> </div>
</div>
<!--end-Footer-part-->
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.tables.js"></script>

<script type="text/javascript">
  function preguntar(idprestamo){
    if(confirm('¿Estas seguro que quieres devolver el material?'))
    {
      window.location.href = "delete/eliminar_prestamo.php?del=" + idprestamo;
    }

  }

</script>
</body>
</html>
<?php 
}else{
  header("location:Login.php");
}
?>