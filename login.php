<?php 
 session_start();
 session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <title>Inventario</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="css/matrix-login.css" />
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox">            
           <form class="login" action="validar.php" method="post" name="login">
				 <div class="control-group normal_text"> <h3><img src="img/logo.png" alt="Logo" /></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <input type="text" name="usuario" placeholder="Usuario" class="bordes" autofocus required/>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <input type="password" name="clave" placeholder="Contraseña" class="bordes" required/>
                        </div>
                    </div>
                </div>
              <div class="form-actions" align="center">
                <input type="submit" value="Ingresar" class="btn btn-success"></input>
            </div>
      <?php
        if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true')
       {
             echo "<div style='color:red'> Error:!! Usuario o contraseña invalido ¡¡</div>";
       }
     ?> 
            </form>
        </div>
        
        <script src="js/jquery.min.js"></script>  
        <script src="js/matrix.login.js"></script> 
    </body>

</html>
