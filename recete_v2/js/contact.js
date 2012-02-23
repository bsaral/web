$(function() {

	// load the modal window
	$('a.modal').click(function(){

		// scroll to top
		$('html, body').animate({scrollTop:0}, 'fast');

		// before showing the modal window, reset the form incase of previous use.
		$('.success, .error').hide();
		$('form#contactForm').show();
		
		// Reset all the default values in the form fields
		$('#name').val('Your name');
		$('#email').val('Your email address');
		$('#comment').val('Enter your comment or query...');

		//show the mask and contact divs
		$('#mask').show().fadeTo('', 0.7);
		$('div#contact').fadeIn();

		// stop the modal link from doing its default action
		return false;
	});

	// close the modal window is close div or mask div are clicked.
	$('div#close, div#mask').click(function() {
		$('div#contact, div#mask').stop().fadeOut('slow');

	});

	$('#contactForm input').focus(function() {
		$(this).val(' ');
	});
	
	$('#contactForm textarea').focus(function() {
        $(this).val('');
    });

	// when the Submit button is clicked...
	$('input#submit').click(function() {
	$('.error').hide().remove();
		//Inputed Strings
		var username = $('#name').val(),
			email = $('#email').val(),
			comment = $('#comment').val();
		
	
		//Error Count
		var error_count;
		
		//Regex Strings
		var username_regex = /^[a-z0-9_-]{3,16}$/,
			email_regex = /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/;
		
			//Test Username
			if(!username_regex.test(name)) {
				$('#contact_header').after('<p class=error>Invalid username entered!</p>');
				error_count += 1;
			}
			
			//Test Email
			if(!email_regex.test(email)) {
				$('#contact_header').after('<p class=error>Invalid email entered!</p>');
				error_count += 1;
			}
			
			//Blank Comment?
			if(comment == '') {
				$('#contact_header').after('<p class=error>No Comment was entered!</p>');
				error_count += 1;
			}
			
			//No Errors?
			if(error_count === 0) {
				$.ajax({
					type: "post",
					url: "send.php",
					data: "name=" + name + "&email=" + email + "&comment=" + comment,
					error: function() {
						$('.error').hide();
						$('#sendError').slideDown('slow');
					},
					success: function () {
						$('.error').hide();
						$('.success').slideDown('slow');
						$('form#contactForm').fadeOut('slow');
					}				
				});	
			}
			
			else {
                $('.error').show();
            }
			
		return false;
	});
	
});