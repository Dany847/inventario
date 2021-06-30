 <?php 
 session_start();
 if ($_SESSION['validar'] ==1) {
?>
<!DOCTYPE html>
<?php
require_once 'connect.php';
?>
<html lang="en">
<head>
  <title>REACTIVOS</title>
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
      <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> INICIO</a> <a href="#" class="current">REACTIVOS</a> </div>
      <h1>REACTIVOS</h1>
    </div>
    <div class="container-fluid">
      <hr>
      <div class="row-fluid">
        <div class="span12">
           <a href="reactivos.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
          </svg></a>

          <p> Generar reporte: &nbsp; &nbsp;
          <a href="pdf_rea_bromato.php" target="_blank" >Lab. Bromatología</a>
          &nbsp;
          <a href="pdf_rea_pesado.php" target="_blank" >Lab. pesado</a>
          &nbsp;
          <a href="pdf_rea_micro.php" target="_blank" >Lab. microbiología</a>
          &nbsp;
          <a href="pdf_rea_quimi.php" target="_blank" >Lab. quimica</a>
          &nbsp;
          <a href="pdf_rea_fisio.php" target="_blank" >Lab. fisiología</a></p>
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h5>REACTIVOS GUARDADO EN EL SISTEMA</h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>N°</th>
                    <th>Cantidad</th>
                    <th>Unidad</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Descripción</th>
                    <th>Área</th>
                    <th>Acción</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $qreactivos = $conn->query("select reactivos.idreactivos, reactivos.cantidad, reactivos.unidad, reactivos.nombre, reactivos.marca, reactivos.descripcion, area.nombrearea
                   from reactivos
                   inner join area on  area.idarea = reactivos.idarea") or die(mysqli_error());
                  $count = 0;
                  while($fila = $qreactivos->fetch_array()){
                   $count++; 
                   ?>
                   <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $fila['cantidad']?></td>
                    <td><?php echo $fila['unidad']?></td>
                    <td><?php echo $fila['nombre']?></td>
                    <td><?php echo $fila['marca']?></td>
                    <td><?php echo $fila['descripcion']?></td>
                    <td><?php echo $fila['nombrearea']?></td>
                    <td style="text-align: center; width: 200px;" >
                      <a onclick="preguntar(<?php echo $fila['idreactivos']?>)"><img src="img/boton-x.png"  width="20" height="20" border=0/> </a>

                      &nbsp; &nbsp; &nbsp;
                      <?php echo "<a href='actualizar_reactivo.php?idreactivos=".$fila['idreactivos']."'> <img src='img/boton-editar.png'  width='20' height='20' border=0/> </a>"; ?>
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
  function preguntar(idreactivos){
    if(confirm('¿Estas seguro que deseas eliminar el reactivo?'))
    {
      window.location.href = "delete/eliminar_reactivos.php?del=" + idreactivos;
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