function(){
	$("#Empresa").change(function(){
		alert("ok");
	});
}
	 		/*$.ajax({
                data:  parametros,
                url:   'ajax_provincias.php',
                type:  'post',
                beforeSend: function () { },
                success:  function (response) {                	
                    $("#Sede").html(response);
                },
                error:function(){
                	alert("error")
                }
            });
	 	})

	 	$("#provincias").change(function(){
	 		var parametros= "id="+$("#Sede").val();
	 		$.ajax({
                data:  parametros,
                url:   'ajax_distritos.php',
                type:  'post',
                beforeSend: function () { },
                success:  function (response) {                	
                    $("#distritos").html(response);
                },
                error:function(){
                	alert("error")
                }
            });
	 	})       
    })