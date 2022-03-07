$(function() {

	$('#navMenu').on('click', 'li', function() {
		 if ($(this).hasClass('menu__item--current')) {
			$('.menu__item').removeClass('menu__item--current');
		} else {
			$('.menu__item').removeClass('menu__item--current');
			$(this).addClass('menu__item--current');
		} 
		/* $(this).toggleClass("menu__item--current"); */

		/* $('#navMenu li.active').removeClass('active');
		$(this).addClass('active'); */


        console.log('katt');
	});

	/* $( "ul li" ).addClass(function( index ) {return "item-" + index;}); */
});
