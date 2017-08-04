
$(document).ready( function () {

	function showModalSuccess(message) {
	    $('#modal_message .modal-message').text(message);
	    $('#modal_message').modal('open');
	};
	function showModalError(message) {
		$('#modal_error -modal-message').text(message);
		$('#modal_error').modal('open');
	}
	$.ajaxSetup({
	    headers: {
	        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    }
	});

	var url = localStorage.getItem('url');
	$('#comeback').attr('href', url);
	$('.comeback').attr('href', url);

	$('input#input_text, textarea#message').characterCounter();
	$('#sector').material_select();

	$('.nav-barra').sideNav({ 
		edge: 'right',
		closeOnClick: true,
		draggable: true 
	});
	
	$('.login').dropdown({
		constrainWidth: true,
		belowOrigin: true,
		alignment: 'left'
	});

	$('.nav-perfil').dropdown({
		constrainWidth: false,
		belowOrigin: true,
		alignment: 'right'
	});

	$('#modal_message').modal({
		ready: function(){
			showModalSuccess('condiciones');
		},
		complete: function() {
			console.log('close');
		}
	});

	$('#modal_error').modal({
		ready: function() {
			showModalError();
		},
		complete: function() {
			console.log(this)
		}
	});

	/*****************/

	$(window).on('hashchange', function (e) {
        var name = window.location.hash;
        var name_clean = name.substr(1);
        if (name.length) {
            $('html, body').animate({
                scrollTop: $('.go-to-section[data-section-name="' + name_clean + '"]').offset().top - 50
            });
        }
    });

    $(window).on('load', function () {
        $(window).trigger('hashchange');
    });

	$('.go-cotiza').on('click', function(){
		$("html, body").animate({scrollTop: $('.go-to-section[data-section-name="cotiza"]').offset().top - 50});
	});
	$('.go-products').on('click', function(){
		$("html, body").animate({scrollTop: $('.go-to-section[data-section-name="productos"]').offset().top - 50});
	});
	
	function scrollMenu () {
		var start_change = $('#nav-bar');
		start_change.toggleClass('scrolled', $(this).scrollTop() > start_change.height());
	}
	$(document).scroll(scrollMenu);

	var $cotizaHome = $('#cotiza-home');
	var $cotizapersonal = $('#cotizapersonal');
	var $formFree = $('#form-free');
	var $formContact = $('#form-contact');

	function justNumbers (e) {
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
            (e.keyCode >= 35 && e.keyCode <= 40)) {
            return;
        }
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    };

	$('#employeehome').keydown(justNumbers);
	$('#phone').keydown(justNumbers);
	$('#contact_person_phone').keydown(justNumbers);
	$('#phone_contact').keydown(justNumbers);
	$('#employee_number').keydown(justNumbers);
	$('#employee_contact').keydown(justNumbers);
	$('#number_ruc').keydown(justNumbers);

	$.validator.setDefaults({
	    ignore: []
	});

	/* opciones de cotizacion */
	$('#cotiza-home-btn').on('click', function(e){
		e.preventDefault();
		var $sliderValue = $('#test5').val();
		console.log($sliderValue);
		var $cotizaOption1 = $('#cotizaopt1');
		var $cotizaOption2 = $('#cotizaopt2');

		var $slider = $('#test5')

		if ( $sliderValue == 0) {
			$('#slide-cero').css('display', 'block').text('error').addClass('error');

		} else if ( ($sliderValue >= 1 && $sliderValue <= 10) ) {
			window.location.href = urlAfiliacion;

		} else if ( ($sliderValue >= 11 && $sliderValue <= 300) ) {
			$cotizaOption1.css('display', 'flex');
			$cotizaOption2.css('display', 'none');
			$("html, body").animate({scrollTop: $($cotizaOption1).offset().top - 50});

		} else if ( $sliderValue >= 301 ) {

			$('#employee').val($sliderValue);
			$cotizaOption2.css('display', 'flex');
			$cotizaOption1.css('display', 'none');
			$("html, body").animate({scrollTop: $($cotizaOption2).offset().top - 50});
		}

	});
	/* cotizacion personal */
	$cotizapersonal.validate({
		errorElement: 'span',
		errorClass: 'error',
		rules: {
			name: {
				required: true
			},
			company: {
				required: true
			},
			phone: {
				required: true,
				digits: true
			},
			email: {
				required: true
			},
			cargo: {
				required: true
			}
		},
		messages: {
			email: {
				required: 'El correo electrónico es inválido.'
			},
			phone: {
				required: 'Por favor solo ingrese números.'
			}
		},
		errorPlacement: function(error, placement){
			if (placement.attr('name') == 'name' || 'company' || 'phone' || 'email' || 'cargo') {
				error.insertAfter(placement);
			}
		}
	});
	$cotizapersonal.on('submit', function(e){
		e.preventDefault();
		localStorage.setItem('url', window.location.href);

		if ($cotizapersonal.valid()) {
			$('#form-loader').css('display', 'flex').addClass('fadein');
			$('#cotizaopt2').css('display', 'none');
			
			$.post($cotizapersonal.attr('action'), $cotizapersonal.serialize(), function(response){
				if (response == 'success') {
					$cotizapersonal.trigger('reset');
					location.href = '/success-checkout';
				} else {
					location.href = '/error-checkout';
				}
			});
		}

	});
	$('#cotiza-personal-btn').on('click', function(e){
		e.preventDefault();
		$cotizapersonal.submit();
	});

	/* afiliciacion hasta 10 */
	$formFree.validate({
		errorElement: 'span',
		rules: {
			number_ruc: {
				required: true,
				digits: true,
				maxlength: 11
			},
			company: {
				required: true
			},
			razon: {
				required: true
			},
			sector: {
				required: true
			},
			contact_person: {
				required: true
			},
			contact_person_email: {
				required: true,
			},
			contact_person_phone: {
				required: true,
				digits: true
			},
			terms: {
				required: true
			}
		},
		messages: {
			sector: {
				required: 'Debe seleccionar un sector.'
			},
			contact_person_email: {
				required: 'El correo electrónico es inválido.'
			},
			contact_person_phone: {
				required: 'Por favor solo ingrese números.'
			},
			terms: {
				required: 'Debe aceptar terminos y condiciones.'
			}
		},
		errorPlacement: function(error, placement){
			if (placement.attr('name') === 'number_ruc' || 'company' || 'razon' || 'contact_person' || 'contact_person_phone' || 'contact_person_email') {
				error.insertAfter(placement);
			} 
			if (placement.attr('type') === 'checkbox') {
				error.insertAfter(placement.parent('.terms-box'));
			} 
			if (placement.parent('.select-box').length > 0) {
				error.insertAfter(placement.parent('.select-box'));
			}
		}
	});

	$formFree.on('submit', function(e){
		e.preventDefault();
		localStorage.setItem('url', window.location.href);

		if ($formFree.valid()) {
			$('#form-loader').css('display', 'flex').addClass('fadein');
			$('#form-free-wrap').css('display', 'none');
			$("html, body").animate({scrollTop: 0}, 500);

			$.post($formFree.attr('action'), $formFree.serialize(), function(response){
				if (response == 'success') {
					$formFree.trigger('reset');
					location.href = '/success-free';
				} else {
					location.href = '/error-free';
				}

			});
		}
	});

	$('#btn-send-free').on('click', function(e){
		e.preventDefault();
		$formFree.submit();
	});


	/* formulario de contacto */
	$formContact.validate({
		errorElement: 'span',
		errorClass: 'error',
		rules: {
			name_contact: {
				required: true
			},
			company_contact: {
				required: true
			},
			phone_contact: {
				required: true,
				digits: true
			},
			email_contact: {
				required: true
			},
			position_contact: {
				required: true
			},
			employee_contact: {
				required: true
			}
		},
		messages: {
			email_contact: {
				required: 'El correo electrónico es inválido.'
			},
			phone_contact: {
				required: 'Por favor solo ingrese números.'
			}
		},
		errorPlacement: function(error, placement) {
			if (placement.attr('name') == 'name_contact' || 'company_contact' || 'phone_contact' || 'employee_contact') {
				error.insertAfter(placement);
			}
		}
	});

	$formContact.on('submit', function(e){
		e.preventDefault();
		localStorage.setItem('url', window.location.href);

		if ($formContact.valid()) {
			$('#form-loader').css('display', 'flex').addClass('fadein');
			$('#form-contact-wrap').css('display', 'none');
			$("html, body").animate({scrollTop: 0}, 500);

			$.post($formContact.attr('action'), $formContact.serialize(), function(response){
				if (response == 'success') {
					$formContact.trigger('reset');
					location.href = '/success-contact';	
				} else {
					location.href = '/error-contact';
				}
			});
		}
	});

	$('#btn-send-contact').on('click', function(e){
		e.preventDefault();
		$formContact.submit();
	});

});