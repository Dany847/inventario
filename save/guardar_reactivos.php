	<?php
	require_once '../connect.php';
	if(ISSET($_POST['guardar_reactivos'])){
		$cantidad = $_POST['cantidad'];
		$unidad = $_POST['unidad'];
		$nombre = $_POST['nombre'];
		$marca = $_POST['marca'];
		$descripcion = $_POST['descripcion'];
		$idarea = $_POST['idarea'];

		
		$q_equipos = $conn->query("SELECT * FROM `reactivos` WHERE `nombre` = '$nombre'") or die(mysqli_error());
		$v_equipos = $q_equipos->num_rows;
		if($v_equipos == 1){
			echo '
				<script type = "text/javascript">
					alert("Nombre del área ya existe");
					window.location = "../reactivos.php";
				</script>
			';
		}else{
			$conn->query("INSERT INTO `reactivos` VALUES('', '$cantidad', '$unidad', '$nombre', '$marca', '$descripcion', '$idarea')") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Datos guardados exitosamente");
					window.location = "../reactivos.php";
				</script>
			';
		}
	}
	