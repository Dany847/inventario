		<?php
		require_once '../connect.php';

		if (isset($_GET['del'])) 
		{
			$id_equipo=$_GET['del'];

			$conn->query("DELETE FROM `equipos` WHERE `id_equipo`= '$id_equipo'") or die(mysqli_error());
			header('location: ../l_equipos.php');
		}