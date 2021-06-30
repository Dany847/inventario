<?php
	require_once '../connect.php';
	if(ISSET($_POST['edit_usuario'])){
		$usuario = $_POST['usuario'];
		$e_mail = $_POST['e_mail'];
		$clave = $_POST['clave'];
		$idrol = $_POST['idrol'];

			$conn->query("UPDATE `usuario` SET `usuario` = '$usuario', `e_mail` = '$e_mail', `clave` = '$clave', `idrol` = '$idrol' WHERE `idusuario` = '$_REQUEST[idusuario]'") or die(mysqli_error());
			echo'
				<script type = "text/javascript">
					alert("Guardar Cambios");
					window.location = "../l_usuarios.php";
				</script>
			';
	}	