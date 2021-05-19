function init()
{
	document.getElementById("impares").style.display="none";
}

function enviar()
{
	
	var txtName;
	var txtDate;

	txtName=document.getElementById("txtName").value;
    txtDate=document.getElementById("txtDate").value;

    
    if(txtName==="" || txtDate==="")
    {
    	alert("Por favor ingrese los datos solicitados!");
    }

    else
    {

        //alert("Datos ingresados cliente: "+txtName+" - "+txtDate)
    	var formData = new FormData($("#frmEnviar")[0]);

		$.ajax({
			url: "./ajax/enviar.php?op=enviar",
	    	type: "POST",
	    	data: formData,
	    	contentType: false,
	    	processData: false,

	    	success: function(datos)
	    	{   
				data=JSON.parse(datos);
				document.getElementById("impares").style.display="block";
            	document.getElementById("name").innerHTML='Hola '+data.name;
            	document.getElementById("edad").innerHTML='Tu edad es: '+data.edad;
            	document.getElementById("anios").innerHTML=data.anios;
            	document.getElementById("anios2").innerHTML=data.anios2;
				//alert(datos)
	    	}

		});


        	

    }


   
}




init()