$(function() {
	$('.modositGomb').on('click', function() {
		let id = this.id;
		$('#agazatiPID').val(id);
        $('#apId').hide();
        const tomb=['eletkor', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j'];
        tomb.forEach((elem)=>{
            $('.adatok').find('.'+elem).each(function() {
                if (this.id === id) {$('#'+elem).val($(this).text());}
            });
        });
		
	});

    $(".adatModositEnged").on('click', function(){
        $("input").removeAttr("readonly");
    });
});
