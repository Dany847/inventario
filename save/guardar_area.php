	<?php
	require_once '../connect.php';
	if(ISSET($_POST['guardar_area'])){
		$nombrearea = $_POST['nombrearea'];
		$responsable = $_POST['responsable'];
		
		$q_area = $conn->query("SELECT * FROM `area` WHERE `nombrearea` = '$nombrearea'") or die(mysqli_error());
		$v_area = $q_area->num_rows;
		if($v_area == 1){
			echo '
				<script type = "text/javascript">
					alert("Nombre del área ya existe");
					window.location = "../area.php";
				</script>
			';
		}else{
			$conn->query("INSERT INTO `area` VALUES('', '$nombrearea', '$responsable')") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Datos guardados exitosamente");
					window.location = "../area.php";
				</script>';
			
		}
	}