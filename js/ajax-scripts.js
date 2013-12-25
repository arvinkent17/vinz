/** 
 *	@author Arvin Kent Lazaga <arvinkent17@gmail.com> 
 *  This Javascript File Contains All AJAX Scripts for Manipulating Data and Other Functons 
 */

// Initialize All Functions on DOM 
$(function() {
	init();

	$("#closex").on('click', function() {
		$(".alert-message").fadeOut('slow');
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

