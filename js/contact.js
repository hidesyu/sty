/* -----------------------------------------------------------------------------

 contact.js

----------------------------------------------------------------------------- */

$(function() {
	$('#formContactType04').on('change', function(){
		if ($(this).is(':checked')) {
		$('.btnForm button').prop('disabled', false);
		} else {
		$('.btnForm button').prop('disabled', true);
		}
	});
});


