<?php
	include "Php/Globales/Conexion.php";
	$consulta = "SELECT IDEMPRESA, NOMBRE FROM empresa";
	$resultados = mysqli_query($conexion, $consulta);
?>
<html>
	<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Telematica - Entrar o registrarse</title>
		<link rel="icon" href="Imagenes/Globales/logo_telematica.ico" sizes="192x192">
		<link rel="stylesheet" href="Css/Index/Index.css">
		<script src="Js/Globales/jquery.js"></script>	
	</head>
	<body>
		<main>
			<div class="contenedor__todo">
				<div class="caja__trasera">
					<div class="caja__trasera-login">
						<h3>¿Ya tiene cuenta?</h3>
						<p>Inicie sesión para entrar en la página</p>
						<button id="btn__iniciar-sesion">Iniciar Sesión</button>
					</div>
					<div class="caja__trasera-register">
						<h3>¿No tiene una cuenta?</h3>
						<p>Regístrese para que pueda iniciar sesión</p>
						<button id="btn__registrarse">Regístrarse</button>
					</div>
				</div>

				<!--Formulario de Login y registro-->
				<div class="contenedor__login-register">
					<!--Login-->
					<form action="Php/Index/Login.php" method="post" class="formulario__login">
						<h2>Iniciar Sesión</h2>
						<input type="email" placeholder="Ingrese su correo electronico" name="Correo" required>
						<input type="password" placeholder="Digite su contraseña" name="Contrasena" required>
						<button type="submit" >Entrar</button>
					</form>

					<!--Register-->
					<form action="Php/Index/Registro.php" method="post" class="formulario__register">
						<h2>Regístrarse</h2>
						
						<select name="Empresa" id="empresa">
							<option selected disabled hiden  value="">Seleccione la empresa</option>
							<?php foreach ($resultados as $opciones):?>
								<option value="<?php echo $opciones['IDEMPRESA']?>"><?php echo $opciones['NOMBRE']?></option>
							<?php endforeach?>
						</select>			
						
						<select name="Ciudad" id="Ciudad">
							<option selected disabled hiden  value="">Seleccione la ciudad</option>
						</select>
						
						<script language="javascript">
							$(document).ready(function(){
								$("#empresa").change(function () {

									$("#empresa option:selected").each(function () {
										id_empresa = $(this).val();
										$.post("Php/Globales/Ciudades.php", { id_empresa : id_empresa  }, function(data){
											$("#Ciudad").html(data);
										});            
									});
								})
							});
						</script>
						
						
						<input type="number" placeholder="Numero de documento" name="Documento" required>
						<input type="text" placeholder="Nombres Completos" name="Nombre" pattern="[a-zA-Z]+" required>
						<input type="text" placeholder="Apellidos completos" name="Apellido"  pattern="[a-zA-Z]+" required>
						<input type="email" placeholder="Correo Electronico" name="Correo" required>
						<input type="password" placeholder="Registre una contraseña" name="Contrasena" required>
						<input type="password" placeholder="Confirme la Contraseña" name="Confirmar" required>
						<button type="submit" onClick="">Regístrarse</button>
					</form>
				</div>
			</div>
		</main>
	</body>
		<script src="js/Index/script_Index.js"></script>
		<script src="Js/Index/script_Enviar.js"></script>
</html>