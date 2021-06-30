	<?php
	require_once '../connect.php';
	if(ISSET($_POST['save_equipo'])){
		$n_serie = $_POST['n_serie'];
		$descripcion = $_POST['descripcion'];
		$marca = $_POST['marca'];
		$modelo = $_POST['modelo'];
		$cantidad = $_POST['cantidad'];
		$observaciones = $_POST['observaciones'];
		$idarea = $_POST['idarea'];

		$conn->query("INSERT INTO `equipos` VALUES('','$n_serie', '$descripcion', '$marca', '$modelo', '$cantidad', '$observaciones', '$idarea')") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Datos guardados exitosamente");
					window.location = "../equipos.php";
				</script>
			';
	}
	