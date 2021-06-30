<?php
	require_once '../connect.php';
	if(ISSET($_POST['edit_material'])){
		$descripcion = $_POST['descripcion'];
		$cantidad = $_POST['cantidad'];
		$unidad = $_POST['unidad'];
		$observaciones = $_POST['observaciones'];
		$idarea = $_POST['idarea'];

			$conn->query("UPDATE `materiales` SET `descripcion` = '$descripcion', `cantidad` = '$cantidad', `unidad` = '$unidad', `observaciones` = '$observaciones', `idarea` = '$idarea'  WHERE `idmaterial` = '$_REQUEST[idmaterial]'") or die(mysqli_error());
			echo'
				<script type = "text/javascript">
					alert("Guardar Cambios");
					window.location = "../l_materiales.php";
				</script>
			';
	}	