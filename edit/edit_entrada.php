<?php
	require_once '../connect.php';
	strtotime("-8 HOURS");
			$conn->query("UPDATE `entrada` SET `h_salida` = NOW() WHERE `id_entrada` = '$_REQUEST[id_entrada]'") or die(mysqli_error());

			echo'
				<script type = "text/javascript">
					alert("El usaurio ha terminado su sesión");
					window.location = "../l_entrada.php";
				</script>
			';
	