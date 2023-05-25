<?php
	include "../Globales/Conexion.php";

	$correo = strtoupper($_POST['Correo']);
	$contrasena = $_POST['Contrasena'];
	$resultados = mysqli_query($conexion,"SELECT * FROM usuario");

	 while($consulta = mysqli_fetch_array($resultados)){
		 
		 if($consulta['CORREO'] == $correo){
			if($consulta['CONTRASEÑA'] == $contrasena){
				if($consulta['ESTADO'] != 0 ){
					if($consulta['ROL'] == '2'){
						$x=$consulta['IDUSUARIO'];
						$x=$x/50801;


						header("Location:../../Links/Administrador/Panel_AD.php?id=".$x);
						

					}
					else{
						if($consulta['ROL'] == '1'){
							echo'<script>
									alert("AUN NO CUENTA CON UN ROL ASIGNADO. \nComuniquese con el administrador");
									window.location = "../../index.php"
								</script>';
						}
					}	
				}
				else{
					echo'<script>
						alert("EL USUARIO ESTA DADO DE BAJA. \nComuniquese con el administrador.");
						window.location = "../../index.php"
					</script>';
								
				}
			}
			else{
			 	echo'<script>
					alert("CONTRASEÑA INCORRECTA. \nPor favor verfique o comuniquese con el administrador");
					window.location = "../../index.php"
				</script>';	
			}
		 }
		 else{			 
			echo'<script>
				alert("EL USUARIO NO EXISTE. \nPor favor verfique o comuniquese con el administrador.");
				window.location = "../../index.php"
			</script>';
		 }
	}
			
	
?>