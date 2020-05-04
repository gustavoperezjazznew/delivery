$(document).ready(function(){
	$.ajaxSetup({
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
 	 }); 
	// envia datos a la pantalla de donde se ve el plato 
	$('.irapromo').click(function(e){
	e.preventDefault()	
		var	form = $(this).parents('form');
		var url = form.attr('action');
		$.post(url, form.serialize(), function(result){
			$(".ingre").remove();
			$("#platover").html(result.nombre_plato);
			$('#imagenplato').attr('src', result.imagenplato);
			$('html,body').animate({
    			scrollTop: $("#event").offset().top
			}, 1000);

			for(var i in result.ingredientes){
				var nuevo_e = $('<p/>', {'class' : 'ingre','id'    : 'id_' + i});
				$('#muestradelmenu').append(nuevo_e);
				$('#id_' + i).html(result.ingredientes[i].nombre);
			}
			
		}).fail(function(){
			$('#alert').html('contacte al administrador');
		});
	});

	//// filtra los botones del menu 
	$(".filter").on("click", function() {
	    var value = $(this).attr('class');
	    var valueid = $(this).attr('id');
		$("#menuplatohtml div").filter(function() {
			if ($('.mix').is(':visible')) {
				$('.mix').hide();
			}
	    	$('.' + valueid).toggle();
	    });
  	});

});	

		