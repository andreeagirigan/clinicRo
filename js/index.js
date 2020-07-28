$(document).ready(function(){
	
	$('.tabs .tab').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('.tabs .tab').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	});
	
	$('.input').blur(function(){
		tmpval = $(this).val();
		if(tmpval == '') {
			$(this).addClass('');
			$(this).removeClass('not-empty');
		} else {
			$(this).addClass('not-empty');
			$(this).removeClass('');
		}
	// function checkemail(){
		// var p=f.parola.value;
		// var cp=f.cparola.value;
		// if(p==cp){
		 // return //alert ("Parola nu corespunde cu cea introdusa anterior")
		// else
			// alert ("Parola nu corespunde cu cea introdusa anterior")
		// }
	// }
	});
	


})