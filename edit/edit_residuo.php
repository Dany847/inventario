<?php
	require_once '../connect.php';
	if(ISSET($_POST['edit_residuo'])){
		$cantidad = $_POST['cantidad'];
		$unidad = $_POST['unidad'];
		$clasificacion = $_POST['clasificacion'];
		$recipiente = $_POST['recipiente'];
		$observaciones = $_POST['observaciones'];
		$idarea = $_POST['idarea'];

			$conn->query("UPDATE `residuos` SET `cantidad` = '$cantidad', `unidad` = '$unidad', `clasificacion` = '$clasificacion', `recipiente` = '$recipiente', `observaciones` = '$observaciones', `idarea` = '$idarea'  WHERE `idresiduos` = '$_REQUEST[idresiduos]'") or die(mysqli_error());
			echo'
				<script type = "text/javascript">
					alert("Guardar Cambios");
					window.location = "../l_residuos.php";
				</script>
			';
	}	