<?php
	require_once '../connect.php';
	if(ISSET($_POST['edit_area'])){
		$nombrearea = $_POST['nombrearea'];
		$responsable = $_POST['responsable'];

			$conn->query("UPDATE `area` SET `nombrearea` = '$nombrearea', `responsable` = '$responsable' WHERE `idarea` = '$_REQUEST[idarea]'") or die(mysqli_error());
			echo'
				<script type = "text/javascript">
					alert("Guardar Cambios");
					window.location = "../l_area.php";
				</script>
			';
	}	