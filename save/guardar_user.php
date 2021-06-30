	<?php
	require_once '../connect.php';
	if(ISSET($_POST['guardar_usuarios'])){
		$usuario = $_POST['usuario'];
		$e_mail = $_POST['e_mail'];
		$clave = $_POST['clave'];
		$idrol = $_POST['idrol'];
		
		$q = $conn->query("SELECT * FROM `usuario` WHERE `usuario` = '$usuario'") or die(mysqli_error());
		$v_area = $q->num_rows;
		if($v_area == 1){
			echo '
				<script type = "text/javascript">
					alert("Nombre del área ya existe");
					window.location = "../l_usuarios.php";
				</script>
			';
		}else{
			$conn->query("INSERT INTO `usuario` VALUES('','$usuario', '$e_mail', MD5('$clave'), '$idrol')") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Datos guardados exitosamente");
					window.location = "../l_usuarios.php";
				</script>
			';
		}
	}