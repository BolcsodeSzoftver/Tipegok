$(function() {
	$('.adatok2').hide();
	$('.adatok3').hide();
	$('.adatok4').hide();

	$('.dolgozoModalAdatok1').on('click', function() {
		$('.adatok1').show();
		$('.adatok2').hide();
		$('.adatok3').hide();
		$('.adatok4').hide();
	});

	$('.dolgozoModalAdatok2').on('click', function() {
		$('.adatok1').hide();
		$('.adatok2').show();
		$('.adatok3').hide();
		$('.adatok4').hide();
	});

	$('.dolgozoModalAdatok3').on('click', function() {
		$('.adatok1').hide();
		$('.adatok2').hide();
		$('.adatok3').show();
		$('.adatok4').hide();
	});

	$('.dolgozoModalAdatok4').on('click', function() {
		$('.adatok1').hide();
		$('.adatok2').hide();
		$('.adatok3').hide();
		$('.adatok4').show();
	});
});
