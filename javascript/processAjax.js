
$(document).ready(function() {

	$('.calclo').click(function(){

		var implicantes = $('input[name^="implicantes[]"]').serialize();
		var implicados = $('input[name^="implicados[]"]').serialize();

		$.ajax({
		   
		    url : './process.php',
		    data : implicantes+'&'+implicados+'&action=l0',
		    type : 'POST',
		   
		    success : function(response) {

		         var l0 = $.parseJSON(response);

		         $('#l0').html('Conjunto de Dependencias L0: {'+l0+'}');
		         $('.calcl1').prop( "disabled", false );
		    },

		    error : function(xhr, status) {

		        alert('Disculpe, existió un problema');
		    },

		    complete : function(xhr, status) {

		    }
		});
	});

	$('.calcl1').click(function(){

		var implicantes = $('input[name^="implicantes[]"]').serialize();
		var implicados = $('input[name^="implicados[]"]').serialize();

		$.ajax({
		   
		    url : './process.php',
		    data : implicantes+'&'+implicados+'&action=l1',
		    type : 'POST',
		   
		    success : function(response) {
		    	 //alert(response);
		         var l1 = $.parseJSON(response);

		         $('#l1').html('Conjunto de Dependencias L1: {'+l1+'}');
		         $('.calcl2').prop( "disabled", false );
		    },

		    error : function(xhr, status) {

		        alert('Disculpe, existió un problema');
		    },

		    complete : function(xhr, status) {

		    }
		});
	});

	$('.calcl2').click(function(){

		var implicantes = $('input[name^="implicantes[]"]').serialize();
		var implicados = $('input[name^="implicados[]"]').serialize();

		$.ajax({
		   
		    url : './process.php',
		    data : implicantes+'&'+implicados+'&action=l2',
		    type : 'POST',
		   
		    success : function(response) {
		    	 //alert(response);
		         var l2 = $.parseJSON(response);

		         $('#l2').html('Conjunto de Dependencias L2: {'+l2+'}');
		         //$('.calcl2').prop( "disabled", false );
		    },

		    error : function(xhr, status) {

		        alert('Disculpe, existió un problema');
		    },

		    complete : function(xhr, status) {

		    }
		});
	});
});