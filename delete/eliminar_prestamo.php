		<?php
		require_once '../connect.php';

		if (isset($_GET['del'])) 
		{
			$idprestamo=$_GET['del'];

			$conn->query("DELETE FROM `prestamo` WHERE `idprestamo`= '$idprestamo'") or die(mysqli_error());
			header('location: ../devolucion.php');
		}