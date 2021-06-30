		<?php
		require_once '../connect.php';

		if (isset($_GET['del'])) 
		{
			$idmaterial=$_GET['del'];

			$conn->query("DELETE FROM `materiales` WHERE `idmaterial`= '$idmaterial'") or die(mysqli_error());
			header('location: ../l_materiales.php');
		}