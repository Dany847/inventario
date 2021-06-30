		<?php
		require_once '../connect.php';

		if (isset($_GET['del'])) 
		{
			$id_entrada=$_GET['del'];

			$conn->query("DELETE FROM `entrada` WHERE `id_entrada`= '$id_entrada'") or die(mysqli_error());
			header('location: ../l_entrada.php');
		}