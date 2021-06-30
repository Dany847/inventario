	<?php
		require_once '../connect.php';

		if (isset($_GET['del'])) 
		{
			$idhistorial=$_GET['del'];

			$conn->query("DELETE FROM `historial` WHERE `idhistorial`= '$idhistorial'") or die(mysqli_error());
			header('location: ../historial.php');
		}