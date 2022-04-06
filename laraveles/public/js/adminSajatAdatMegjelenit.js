$(function() {
	$('.adatok2').hide();
	$('.adatok3').hide();
	$('.adatok4').hide();
	$("#bizonyitvanyBezar").hide();
	

	$('.dolgozoModalAdatok1').on('click', function() {
		$('.adatok1').show();
		$('.adatok2').hide();
		$('.adatok3').hide();
		$('.adatok4').hide();
		$(".ment").show();
		$("#bizonyitvanyModosit").show();
		
	});

	$('.dolgozoModalAdatok2').on('click', function() {
		$('.adatok1').hide();
		$('.adatok2').show();
		$('.adatok3').hide();
		$('.adatok4').hide();
		$("#bizonyitvanyBezar").hide();
		$(".ment").show();
		$("#bizonyitvanyModosit").show();
	});

	$('.dolgozoModalAdatok3').on('click', function() {
		$('.adatok1').hide();
		$('.adatok2').hide();
		$('.adatok3').show();
		$('.adatok4').hide();
		$("#bizonyitvanyBezar").hide();
		$(".ment").show();
		$("#bizonyitvanyModosit").show();
	});

	$('.bizonyitvanyokGomb').on('click', function() {
		$('.adatok1').hide();
		$('.adatok2').hide();
		$('.adatok3').hide();
		$('.adatok4').show();
		$("#bizonyitvanyModosit").hide();
		$(".ment").hide();
		$("#bizonyitvanyBezar").show();
	});

	


	
});
