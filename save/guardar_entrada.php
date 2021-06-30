	<?php
	require_once '../connect.php';
	if(ISSET($_POST['entrada'])){

		$materia = $_POST['materia'];
		$responsable = $_POST['responsable'];
		$grupo = $_POST['grupo'];
		$carrera = $_POST['carrera'];
		$n_practica = $_POST['n_practica'];
		$nombre_practica = $_POST['nombre_practica'];
		$fecha = date("Y-m-d", strtotime("-8 HOURS"));

		$conn->query("INSERT INTO `entrada` VALUES('', '$materia', '$responsable', '$grupo', '$carrera', '$n_practica','$nombre_practica','$fecha',NOW(),'')") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Has ingresado un usuario");
					window.location = "../l_entrada.php";
				</script>
			';
}
