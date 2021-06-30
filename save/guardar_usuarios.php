	<?php
	require_once '../connect.php';
	if(ISSET($_POST['guardar_usuarios'])){
		$matricula = $_POST['matricula'];
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$carrera = $_POST['carrera'];
		$telefono = $_POST['telefono'];
		$gmail = $_POST['gmail'];
		$perfil = $_POST['perfil'];
		
		$q = $conn->query("SELECT * FROM `usuarios` WHERE `matricula` = '$matricula'") or die(mysqli_error());
		$v_area = $q->num_rows;
		if($v_area == 1){
			echo '
				<script type = "text/javascript">
					alert("Nombre del área ya existe");
					window.location = "../usuarios.php";
				</script>
			';
		}else{
			$conn->query("INSERT INTO `usuarios` VALUES('$matricula', '$nombre', '$apellidos', '$carrera', '$telefono', '$gmail', '$perfil')") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Datos guardados exitosamente");
					window.location = "../usuarios.php";
				</script>
			';
		}
	}