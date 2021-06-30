	<?php
	require_once '../connect.php';
	if(ISSET($_POST['guardar_materiales'])){
		$descripcion = $_POST['descripcion'];
		$cantidad = $_POST['cantidad'];
		$unidad = $_POST['unidad'];
		$observaciones = $_POST['observaciones'];
		$idarea = $_POST['idarea'];

		
		$q_equipos = $conn->query("SELECT * FROM `materiales` WHERE `descripcion` = '$descripcion'") or die(mysqli_error());
		$v_equipos = $q_equipos->num_rows;
		if($v_equipos == 1){
			echo '
				<script type = "text/javascript">
					alert("Nombre del área ya existe");
					window.location = "../materiales.php";
				</script>
			';
		}else{
			$conn->query("INSERT INTO `materiales` VALUES('','$descripcion', '$cantidad', '$unidad', '$observaciones', '$idarea')") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Datos guardados exitosamente");
					window.location = "../materiales.php";
				</script>
			';
		}
	}
	