  <?php
	session_start();
	include ('conexion.php');
	
	
	if(trim($_POST['password']) != "" && trim($_POST['usuario']) != ""   )
	{
		$password 	= $_POST['password'];
		$usuario 	= $_POST['usuario'];
		$sql 		= "SELECT accound, pass,nombre FROM usuario WHERE accound ='".$usuario."';";
		$fecha = date("d-m-Y H:i:s");
		$result		= @mysql_query($sql,$conexion);
		if(	$row 		= @mysql_fetch_array($result)){
			
			
		
			
			if($row['pass'] == 	$password )
			{	
				//$Acceso_de_personal = "INSERT into Acceso_de_Personal";
				$_SESSION["k_username"] = $row['accound'];
				$_SESSION['k_id'] = $row['nombre'];
				$insertar = "INSERT INTO Acceso_de_Personal values ('".$row['nombre']."','".$row['accound']."','".$fecha."') ";
				@mysql_query($insertar);
				
				echo '<script>
									document.location.href = "../indexa.php";
									echo ("'.$_SESSION['k_username'].'  Has iniciado sesion");
									
						</script>';

			
		}
			else
			{
					echo	'<script>
									document.location.href = "javascript:history.go(-1)";
									echo ("password Incorrecta");
									
							</script>';




							

			}
		
		@mysql_free_result($result);
		//@mysql_query($Acceso_de_personal);
	}
		else
		{
		
echo	'<script>
					document.location.href = "javascript:history.go(-1)";
					echo ("Debe especificar el usuario Correcto");						
				</script>';

		
		}
	}
?>