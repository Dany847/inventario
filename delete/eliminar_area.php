		<?php
		require_once '../connect.php';

		if (isset($_GET['del'])) 
		{
			$idarea=$_GET['del'];

			$conn->query("DELETE FROM `area` WHERE `idarea`= '$idarea'") or die(mysqli_error());
			header('location: ../l_area.php');
		}