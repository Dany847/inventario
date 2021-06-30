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
<link rel="stylesheet" href="css/colorpicker.css" />
<link rel="stylesheet" href="css/datepicker.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link rel="stylesheet" href="css/bootstrap-wysihtml5.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<?php
include('menu.php');
?>

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> INICIO</a> <a href="#" class="tip-bottom">FORMULARIO</a> <a href="#" class="current">REACTIVO</a> </div>
  <h1>REGISTRAR REACTIVO</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span9">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Registrar</h5>
        </div>
        <div class="widget-content nopadding">
          <form method = "POST" action = "save/guardar_reactivos.php" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Cantidad :</label>
              <div class="controls">
                <input style="height: 40px" type="number" class="span9" name="cantidad" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Unidad :</label>
              <div class="controls">
                <input style="height: 40px" type="text" class="span9" name="unidad" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nombre :</label>
              <div class="controls">
                <input style="height: 40px" type="text" class="span9" name="nombre" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Marca :</label>
              <div class="controls">
                <input style="height: 40px" type="text" class="span9" name="marca" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Descripción :</label>
              <div class="controls">
                <input style="height: 40px" type="text" class="span9" name="descripcion" required/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Área :</label>
              <div class="controls">
                 <select name = "idarea" class="span9">
                <option selected = "selected" disabled = "disabled">Seleccione una opción</option>
                <?php
                $area = $conn->query("SELECT * FROM `area` ORDER BY `nombrearea`") or die(mysqli_error());
                while($fila = $area->fetch_array()){
                  ?>
                  <option value = "<?php echo $fila['idarea']?>" required><?php echo $fila['nombrearea']?></option>
                  <?php
                }
                ?>
              </select>
              </div>
            </div>         
            <div class="form-actions">
              <button type="submit" name = "guardar_reactivos" class="btn btn-success">GUARDAR</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</div></div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2021 &copy; TecNM campus Tecomatlán</a> </div>
</div>
<!--end-Footer-part--> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/bootstrap-colorpicker.js"></script> 
<script src="js/bootstrap-datepicker.js"></script> 
<script src="js/jquery.toggle.buttons.js"></script> 
<script src="js/masked.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.form_common.js"></script> 
<script src="js/wysihtml5-0.3.0.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/bootstrap-wysihtml5.js"></script> 
<script>
  $('.textarea_editor').wysihtml5();
</script>
</body>
</html>
<?php 
}else{
  header("location:Login.php");
}
?>