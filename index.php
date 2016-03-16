<html>
<head>
	<title>Calculo de Suma</title>
	<script type="text/javascript" src="javascript/jquery-2.2.1.min.js"></script>

	<script type="text/javascript">

		$(document).ready(function() {

			$('.calcularSuma').click(function(){

				if($('#numero1').val() == '' || $('#numero2').val() == ''){

					alert('Por favor ingrese los numeros');
					return false;
				}

				var numero1 = $('#numero1').serialize();
				var numero2 = $('#numero2').serialize();

				$.ajax({
				   
				    url : 'procesar.php',
				    data : numero1+'&'+numero2,
				    type : 'POST',
				   
				    success : function(response) {

				         $('.resultado').html('Resultado : '+response);
				    },

				    error : function(xhr, status) {

				        alert('Disculpe, existió un problema');
				    },

				    complete : function(xhr, status) {

				    }
				});
			});
		});

		function justNumbers(e){

        	var keynum = window.event ? window.event.keyCode : e.which;

        	if ((keynum == 8) || (keynum == 46))
        		return true;
         
        	return /\d/.test(String.fromCharCode(keynum));
        }

	</script>	

	<style type="text/css">

		.label {
	
			width:150px;
			font-weight: bold;
		}

		input{

			width:200px;
		}

		#first{

			width:80%;
			margin:auto;
			border: solid 2px gray;
			padding: 0 0 30px 30px;
			box-shadow: 0 2px 5px #666666;
		}

		.resultado{

			color:red;
			font-weight:bold;
			font-size: 20px;
			margin-top: 15px;
		}

	</style>

</head>

<body>
	<h1 align="center">Calcular Suma</h1>

	<div id="first">

		<h2>Por Favor ingrese los n&uacute;meros para realizar la suma</h2>
		
		<div class="numeros">
			<div class="label"> Primer N&uacute;mero </div><input type="text" name="numero1" id="numero1" onkeypress="return justNumbers(event)"/>
			<br/><br/>
			<div class="label"> Segundo N&uacute;mero </div><input type="text" name="numero2" id="numero2" onkeypress="return justNumbers(event)"/>
		</div>
		<div class="resultado"></div>

		<p><button class="calcularSuma">Calcular Suma </button> </p>
	</div>
</body>
</html>	