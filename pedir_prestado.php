	<?php
	require_once 'connect.php';
	if(ISSET($_POST['prestado'])){
		foreach($_POST['idmaterial'] as $key=>$valor){
		$cantidad = $valor;
		$idusuario = $_POST['idusuario'];
		$idmaterial = $_POST['idmaterial'][$key];
		$f_prestado =  date("Y-m-d", strtotime("-8 HOURS"));

		$conn->query("INSERT INTO `prestamo` VALUES('', '$f_prestado', '1', 'Prestado', '$idusuario', '$idmaterial')") or die(mysqli_error());
		$conn->query("INSERT INTO `historial` VALUES('', '$f_prestado', '1', 'Prestado', '$idusuario', '$idmaterial')") or die(mysqli_error());
			echo '
				<script type = "text/javascript">
					alert("Has realizado un prestamo exitosamente");
					window.location = "prestamo.php";
				</script>
			';
	}
}
