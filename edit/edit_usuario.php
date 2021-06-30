<?php
	require_once '../connect.php';
	if(ISSET($_POST['edit_usuario'])){
		$matricula = $_POST['matricula'];
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$carrera = $_POST['carrera'];
		$telefono = $_POST['telefono'];
		$gmail = $_POST['gmail'];
		$perfil = $_POST['perfil'];

			$conn->query("UPDATE `usuarios` SET `matricula` = '$matricula', `nombre` = '$nombre', `apellidos` = '$apellidos', `carrera` = '$carrera', `telefono` = '$telefono', `gmail` = '$gmail', `perfil` = '$perfil'  WHERE `idusuario` = '$_REQUEST[idusuario]'") or die(mysqli_error());
			echo'
				<script type = "text/javascript">
					alert("Guardar Cambios");
					window.location = "../l_usuario.php";
				</script>
			';
	}	