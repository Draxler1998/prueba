function Registro_js(){
	event.preventDefault();
	

	var empresa = document.getElementsByName("Empresa").value;
	var sede = document.getElementsByName("Sede").value;
	var documento = document.getElementsByName("Documento").value;
	var nombre = document.getElementsByName("Nombre").value;
	var apellido = document.getElementsByName("Apellido").value;
	var correo = document.getElementsByName("Correo").value;
	var contrasena = document.getElementsByName("Contrasena").value;
	var confirmar = document.getElementsByName("Confirmar").value;
	
	if(contrasena == confirmar){
		/*almacenar datos en la base de datos*/
	}
	else{
		alert("La contraseña no coincide");
	}
}