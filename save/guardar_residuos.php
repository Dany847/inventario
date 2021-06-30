	<?php
	require_once '../connect.php';
	if(ISSET($_POST['guardar_residuos'])){
		$cantidad = $_POST['cantidad'];
		$unidad = $_POST['unidad'];
		$clasificacion = $_POST['clasificacion'];
		$recipiente = $_POST['recipiente'];
		$observaciones = $_POST['observaciones'];
		$idarea = $_POST['idarea'];


			$conn->query("INSERT INTO `residuos` VALUES('', '$cantidad', '$unidad', '$clasificacion', '$recipiente', '$observaciones', '$idarea')") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Datos guardados exitosamente");
					window.location = "../residuos.php";
				</script>
			';
	
	}
	