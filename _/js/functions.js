// remap jQuery to $
(function ($) {

	/* trigger when page is ready */
	$(document).ready(function (){

		// your functions go here

		// stage buttons
		var $stage = $('#wrapper'),
			  $form  = $('.whitewash-form');

		$("#button-intro").on('click', function() {
			// alert('STAGE 1');
			$stage.addClass("stage--1");
			$("#section--1").removeClass('active').addClass('inactive');
			$("#section--2").removeClass('inactive').addClass('active');
			setTimeout(function(){
				$("#name").focus();
		  }, 1000);
		});

		$(".form-input").keyup(function(event){
	    if(event.keyCode == 13) {
				var $inputID = $(this).attr('id'),
						$button  = $('#button-'+$inputID);
				// alert($button);

				if ($(this).val()) {
		      $button.click().addClass('button--active');

					setTimeout(function(){
						$button.removeClass('button--active');
					}, 300);
				}

				else {
		      $button.click().addClass('button--active--empty');

					setTimeout(function(){
						$button.removeClass('button--active--empty');
					}, 300);
				}
	    }
		});

		$(".button").on('click', function() {
			var $this    = $(this);
					$input   = $this.attr('id').replace('button-','');

			if ($("#"+$input).val()) {
				if ($this.is('#button-name')) {
					var $nameIn = $('#name').val();

					$this.addClass('form-button--inactive');
					$this.next('.form-button').removeClass('form-button--inactive');
					$stage.addClass("stage--2");
					$form.removeClass('stage--1').addClass('stage--2');
					$('#name-span').append("&nbsp;"+$nameIn);

					setTimeout(function(){
						$("#email").focus();
				  }, 500);
				}

				if ($this.is('#button-email')) {
					$this.addClass('form-button--inactive');
					$this.next('.form-button').removeClass('form-button--inactive');
					$stage.addClass("stage--3");
					$form.removeClass('stage--2').addClass('stage--3');

					setTimeout(function(){
						$("#postcode").focus();
				  }, 500);
				}

				if ($this.is('#button-postcode')) {
					var $name = $('#name').val(),
					    $email = $('#email').val(),
					    $postcode = $('#postcode').val();

					$stage.addClass("stage--4");
					$("#section--2").removeClass('active').addClass('inactive');
					$("#section--3").removeClass('inactive').addClass('active');
					$(".footer__social-con").addClass("social--out");
					console.log("NAME: "+$name+", EMAIL: "+$email+", POSTCODE: "+$postcode);
				}
			}

			else {
				$("#"+$input).addClass('empty').focus();

				setTimeout(function(){
					$("#"+$input).removeClass('empty');
				}, 500);
			}

		});

	});

}(window.jQuery || window.$));
