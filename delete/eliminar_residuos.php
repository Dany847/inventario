		<?php
		require_once '../connect.php';

		if (isset($_GET['del'])) 
		{
			$idresiduos=$_GET['del'];

			$conn->query("DELETE FROM `residuos` WHERE `idresiduos`= '$idresiduos'") or die(mysqli_error());
			header('location: ../l_residuos.php');
		}