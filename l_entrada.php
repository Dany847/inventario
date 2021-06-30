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
  <title>ÁREA</title>
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
      <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> INICIO</a> <a href="#" class="current">ÁREA</a> </div>
      <h1>ÁREAS</h1>
    </div>
    <div class="container-fluid">
      <hr>
      <div class="row-fluid">
        <div class="span12">

          <a href="entrada.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
          </svg></a>
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h5>ÁREAS REGISTRADO EN EL SISTEMA</h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>N°</th>
                    <th>Materia</th>
                    <th>Responsable</th>
                    <th>Grupo</th>
                    <th>Carrera</th>
                    <th>N° de práctica</th>
                    <th>Nombre de práctica</th>
                    <th>Fecha</th>
                    <th>Hora entrada</th>
                    <th>Hora salida</th>
                    <th>Acción</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $qarea = $conn->query("SELECT * FROM `entrada`") or die(mysqli_error());
                  $count = 0;
                  while($fila = $qarea->fetch_array()){
                    $count++;
                    ?>
                    <tr>
                      <td><?php echo $count; ?></td>
                      <td><?php echo $fila['materia']?></td>
                      <td><?php echo $fila['responsable']?></td>
                      <td><?php echo $fila['grupo']?></td>
                      <td><?php echo $fila['carrera']?></td>
                      <td><?php echo $fila['n_practica']?></td>
                      <td><?php echo $fila['nombre_practica']?></td>
                      <td><?php echo $fila['fecha']?></td>
                      <td><?php echo $fila['h_entrada']?></td>
                      <td><?php echo $fila['h_salida']?></td>
                      <td style="text-align: center; width: 200px;" >
                        <a onclick="preguntar(<?php echo $fila['id_entrada']?>)"> <button type="submit" name = "entrada" class="btn btn-danger btn-sm">Eliminar</button></a>
                       
                        <?php if ($fila['h_salida']=='00:00:00'){ ?>

                          <?php echo "<a href='edit/edit_entrada.php?id_entrada=".$fila['id_entrada']."'><button type='submit' class='btn btn-info btn-sm' name='salir'>Salir</button> </a>"; ?>

                        <?php }else{ ?>

                      </td>
                    </tr>
                    <?php
                  }
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
    function preguntar(id_entrada){
      if(confirm('¿Estas seguro que deseas eliminar el área?'))
      {
        window.location.href = "delete/eliminar_entrada.php?del=" + id_entrada;
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