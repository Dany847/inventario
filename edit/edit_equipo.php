<?php
	require_once '../connect.php';
	if(ISSET($_POST['edit_equipo'])){
		$n_serie = $_POST['n_serie'];
		$descripcion = $_POST['descripcion'];
		$marca = $_POST['marca'];
		$modelo = $_POST['modelo'];
		$cantidad = $_POST['cantidad'];
		$observaciones = $_POST['observaciones'];
		$idarea = $_POST['idarea'];

			$conn->query("UPDATE `equipos` SET `n_serie` = '$n_serie', `descripcion` = '$descripcion', `marca` = '$marca', `modelo` = '$modelo', `cantidad` = '$cantidad', `observaciones` = '$observaciones', `idarea` = '$idarea'  WHERE `id_equipo` = '$_REQUEST[id_equipo]'") or die(mysqli_error());
			echo'
				<script type = "text/javascript">
					alert("Guardar Cambios");
					window.location = "../l_equipos.php";
				</script>
			';
	}	