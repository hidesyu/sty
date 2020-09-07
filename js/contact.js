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

	$('#contact-form').validate({
		rules: {
			'contact_types[]': {
				required: true,
			},
			full_name: {
				required: true,
			},
			email: {
				required: true,
				email: true,
			},
		},

		errorPlacement: function (error, element) {
			if (element.attr('name') == 'contact_types[]') {
				error.insertAfter('.checkBoxError')
			} else {
				error.insertAfter(element)
			}
		},

		messages: {
			'contact_types[]': {
				required: 'チェックボックスに少なくとも1つチェックを入れてください。',
			},
			full_name: {
				required: 'お名前を入力して下さい',
			},
			email: {
				required: 'メールアドレスを入力して下さい',
				email: '正しい形式で入力してください',
			},
		},

	});

});


