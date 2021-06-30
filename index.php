 <?php 
 session_start();
 if ($_SESSION['validar'] ==1 || $_SESSION['validar'] ==2) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Sistema de Inventario</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

 <?php
  include('menu.php');
  ?>

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> INICIO</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lg"> <a href="l_area.php"> <i class="icon-globe"></i> Área</a> </li>
        <li class="bg_ly"> <a href="l_equipos.php"> <i class="icon-inbox"></i>Equipos<span class="label label-success"></a> </li>
        <li class="bg_lo"> <a href="l_materiales.php"> <i class="icon-th"></i> Materiales</a> </li>
        <li class="bg_lg"> <a href="l_reactivos.php"> <i class="icon-th-list"></i>Reactivos</a> </li>
        <li class="bg_ls"> <a href="l_residuos.php"> <i class="icon-tint"></i> Residuos</a> </li>
        <li class="bg_lb"> <a href="l_usuario.php"> <i class="icon-user"></i>Alumnos</a> </li>
        <li class="bg_lb"> <a href="l_usuarios.php"> <i class="icon-user"></i>Usuarios del sistema</a> </li>
        <li class="bg_lo span5"> <a href="prestamo.php"> <i class="icon-fullscreen"></i> Prestamo</a> </li>
        <li class="bg_lg span5"> <a href="devolucion.php"> <i class="icon-calendar"></i> Devolución</a> </li>
        <li class="bg_ly"> <a href="entrada.php"> <i class="icon-calendar"></i> Registrar práctica</a> </li>
        

      </ul>
    </div>
<!--End-Action boxes-->    

<!--Chart-box-->    
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title bg_lg" style="text-align: center;"><span class="icon"></span>
          <h3>Agro-Inventario</h3>
        </div>
        <div class="widget-content" >
          <div class="row-fluid">
            <div class="span12" style="text-align: center;">
              <img src="img/agronomia.png" style="width: 500px; height: auto;">
              <h5>Sistema de Inventario para el laboratorio de Agronomía</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row-fluid">
  <div id="footer" class="span12"> 2021 &copy; TecNM campus Tecomatlán</a> </div>
</div>

<!--end-Footer-part-->

<script src="js/excanvas.min.js"></script> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flot.min.js"></script> 
<script src="js/jquery.flot.resize.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/fullcalendar.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.dashboard.js"></script> 
<script src="js/jquery.gritter.min.js"></script> 
<script src="js/matrix.interface.js"></script> 
<script src="js/matrix.chat.js"></script> 
<script src="js/jquery.validate.js"></script> 
<script src="js/matrix.form_validation.js"></script> 
<script src="js/jquery.wizard.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.popover.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.tables.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
<?php 
}else{
  header("location:Login.php");
}
?>