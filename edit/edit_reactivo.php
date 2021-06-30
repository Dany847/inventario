<?php
	require_once '../connect.php';
	if(ISSET($_POST['edit_reactivo'])){
		$cantidad = $_POST['cantidad'];
		$unidad = $_POST['unidad'];
		$nombre = $_POST['nombre'];
		$marca = $_POST['marca'];
		$descripcion = $_POST['descripcion'];
		$idarea = $_POST['idarea'];

			$conn->query("UPDATE `reactivos` SET `cantidad` = '$cantidad', `unidad` = '$unidad', `nombre` = '$nombre', `marca` = '$marca', `descripcion` = '$descripcion', `idarea` = '$idarea'  WHERE `idreactivos` = '$_REQUEST[idreactivos]'") or die(mysqli_error());
			echo'
				<script type = "text/javascript">
					alert("Guardar Cambios");
					window.location = "../l_reactivos.php";
				</script>
			';
	}	