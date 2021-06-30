		<?php
		require_once '../connect.php';

		if (isset($_GET['del'])) 
		{
			$idreactivos=$_GET['del'];

			$conn->query("DELETE FROM `reactivos` WHERE `idreactivos`= '$idreactivos'") or die(mysqli_error());
			header('location: ../l_reactivos.php');
		}