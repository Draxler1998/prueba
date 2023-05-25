<?php
/*instruccion q hace la conexion a la base de datos*/
	include "../Globales/Conexion.php";
/*Datos capturados del forulario*/
    $empresa = $_POST['Empresa'];
    $ciudad = $_POST['Ciudad'];
    $documento = $_POST['Documento'];
    $nombre = $_POST['Nombre'];
    $apellido = $_POST['Apellido'];
    $correo = $_POST['Correo'];
    $contrasena = $_POST['Contrasena'];
    $confirmar = $_POST['Confirmar'];
/*Se guarda la fecha de sistema e una variable*/
	$fechaingreso = date("Y-m-d");

	if( ($contrasena == $confirmar) && $contrasena !='' ){
/*Conetenido del correo electronico*/
	$contenido = "Se solicita autorizar el acceso a la aplicacion de IT a:".$nombre." ".$apellido." Identificado con numero de documento ".$documento." Quien hara parte de ".$empresa. " " .$ciudad;
/*instruccion que envia el correo a los administradores
	mail("giovanny.avila@finoservices.com", "Autorizacion de nuevo usuario para la aplicacion de Telematica", $contenido);*/

/*variable que guarda la instruccion de AGREGAR a la base de datos*/
	$insertar = "INSERT INTO usuario VALUES (DEFAULT,'$empresa', '$ciudad', '$documento', '$nombre', '$apellido', '$correo', '$contrasena', DEFAULT ,'$fechaingreso', DEFAULT)";
/*variable que inserta los datos a la  base de datos*/
	mysqli_query($conexion, $insertar);
/*intruccion que redirecciona a la pagina de confirmacion*/
	}
?>

<html>
<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Reistro</title>
		<link rel="icon" href="../../Imagenes/Globales/logo_telematica.ico" sizes="192x192">
		<link href="../../Css/Index/Registro/Registro.css" rel="stylesheet" type="text/css">
		<script src="../../Js/Globales/jquery.js"></script>	
	</head>
	<body>
		<main>
			<script language="JavaScript">
				function redireccionar(){
  					window.location.href = "noble";
				}
					setTimeout('redireccionar()',10000);
			</script>
			
		</main>
	</body>
</html>