/** 
 *	@author Arvin Kent Lazaga <arvinkent17@gmail.com> 
 *  This Javascript File Contains All AJAX Scripts for Manipulating Data and Other Functons 
 */

// Initialize All Functions on DOM 
$(function() {
	init();

	// Notification Close Function.
	$("#closex").on('click', function() {
		$(".alert-message").fadeOut('fast');
	});

	// Carousel Auto Slide. 
	$('#myCarousel').carousel({
		interval: 3000,
		pause: 'hover'
	});
	
	// Redirecting Admin to Public Site 
	$("#mainsite").on('click', function() {
		window.location.href = "../../index.php";
	});

})

// Automatically Call Timeout for Data Update
function init() {
	setTimeout(function() {
	auto_update();
	init();	
	}, 200);
	
}

// Retrieve Data from Database using JSON
function auto_update() {
	$.getJSON('fetchdata.php', function(data) {
		$('ul').empty();

		$.each(data.dataresult, function() {
			$('ul').append('<li>Lastname: '+this['lname']+'</li><li>Firstname: '+this['fname']+'</li><li>Middlename: '+this['mname']+'</li>');
			
		});
		$('h1').text('');
	});
}

