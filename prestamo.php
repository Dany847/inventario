 <?php 
 session_start();
 if ($_SESSION['validar'] ==1 || $_SESSION['validar'] ==2) {
?>
<!DOCTYPE html>
<?php
  require_once 'connect.php';
?>
<html lang="en">
<head>
  <title>PRÉSTAMO</title>
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
      <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> INICIO</a> <a href="#" class="current">PRÉSTAMO</a> </div>
      <h1>ÁREA DE PRESTAMO DE MATERIALES</h1>
    </div>
    <div class="container-fluid">
      <hr>
      <div class="row-fluid">
        <div class="span12">
          <form method = "POST" action = "pedir_prestado.php" enctype = "multipart/form-data">
          <div class = "form-group pull-left"> 
            <label>Nombre del estudiante:</label>
            <br />
            <select name = "idusuario" id = "usuario">
              <option value = "" selected = "selected" disabled = "disabled"></option>
              <?php
                $pedir = $conn->query("SELECT * FROM `usuarios` ORDER BY `apellidos`") or die(mysqli_error());
                while($fila = $pedir->fetch_array()){
              ?>
                <option value = "<?php echo $fila['idusuario']?>" required><?php echo $fila['nombre']." ".$fila['apellidos']?></option>
              <?php
                }
              ?>
            </select>
          </div>
          <div class = "form-group pull-right"> 
            <button name = "prestado" class = "btn btn-primary"><span class = "glyphicon glyphicon-thumbs-up"></span> PRESTAR</button>
          </div>
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h5>Lista de materiales</h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>Seleccionar</th>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                    <th>Disponible</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $qarea = $conn->query("SELECT * FROM `materiales`") or die(mysqli_error());

                  while($fila = $qarea->fetch_array()){
                $q = $conn->query("SELECT SUM(cantidad) as total FROM `prestamo` WHERE `idmaterial` = '$fila[idmaterial]' && `estado` = 'Prestado'") or die(mysqli_error());
                $new_qty = $q->fetch_array();
                $total = $fila['cantidad'] - $new_qty['total'];
                  ?>
                  <tr>
                    <td>
                  <?php
                    if($total == 0){
                      echo "<center><label class = 'text-danger'>No Disponible</label></center>";
                    }else{
                      echo ' <input type = "checkbox" name = "idmaterial[]" value = "'.$fila['idmaterial'].'" required></center>
                          
                         ';
                  }
                  ?>
                </td>
                    <td><?php echo $fila['descripcion']?></td>
                    <td><?php echo $fila['cantidad']?></td>
                    <td><?php echo $total?></td>
                  </tr>
                  <?php
                }
                ?>
              </tbody>
            </table>
            </form>
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
</body>
</html>
<?php 
}else{
  header("location:Login.php");
}
?>