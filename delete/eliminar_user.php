		<?php
		require_once '../connect.php';

		if (isset($_GET['del'])) 
		{
			$idusuario=$_GET['del'];

			$conn->query("DELETE FROM `usuario` WHERE `idusuario`= '$idusuario'") or die(mysqli_error());
			header('location: ../l_usuarios.php');
		}