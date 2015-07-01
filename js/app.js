// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

// Transitions for Hero Section
$("nav").addClass("load");
$("div.fade-in-second").addClass("load");
$("div.fade-in-third").addClass("load");

//Very Simple Form Validation

var $fullName = $("#name");
var $email = $("#email");
var $company = $("#company");
var $description = $("#description");

$('form span').hide();

function isNamePresent() {
	return $fullName.val().length > 0;
}

function isEmailPresent() {
	return ($email.val().indexOf("@") != -1) && ($email.val().indexOf(".") != -1) && ($email.val().length > 0);
}

function isCompanyPresent() {
	return $company.val().length > 0;
}

function isDescriptionPresent() {
	return $description.val().length > 0;
}

function canSubmit() {
	return isNamePresent() && isEmailPresent() && isCompanyPresent() && isDescriptionPresent();
}

function enableSubmitEvent() {
  $("#submit").prop("disabled", !canSubmit());
}

$fullName.focus(nameEvent).keyup(nameEvent).keyup(enableSubmitEvent);
$email.focus(emailEvent).keyup(emailEvent).keyup(enableSubmitEvent);
$company.focus(companyEvent).keyup(companyEvent).keyup(enableSubmitEvent);
$description.focus(descriptionEvent).keyup(descriptionEvent).keyup(enableSubmitEvent);

enableSubmitEvent();

// Show or Hide Form Hints After Checking for Valitation

function nameEvent() {
	if(isNamePresent()) {
		$fullName.next().hide();
	} else {
		$fullName.next().fadeIn("fast");
	}
}

function emailEvent() {
	if(isEmailPresent()) {
		$email.next().hide();
	} else {
		$email.next().fadeIn("fast");
	}
}

function companyEvent() {
	if(isCompanyPresent()) {
		$company.next().hide();
	} else {
		$company.next().fadeIn("fast");;
	}
}

function descriptionEvent() {
	if(isDescriptionPresent()) {
		$description.next().hide();
	} else {
		$description.next().fadeIn("fast");
	}
}

// Hide Form Hints on Blur

// blurOnHide = function() {
// 	$(this).next().hide()
// }

$fullName.bind("blur", function() {
	$(this).next().hide()
});

$email.bind("blur", function() {
	$(this).next().hide()
});

$company.bind("blur", function() {
	$(this).next().hide()
});

$('textarea').bind("blur", function() {
	$(this).next().hide()
});


// Scroll Animation

// $(document).ready(function() {
//     $(".scroller").on("click", function( e ) {

//         e.preventDefault();

//         $("body, html").animate({
//             scrollTop: $( $(this).attr('href') ).offset().top
//         }, 600);

//     });
// });

// $(".scroller").click(function() {
//     $('html, body').animate({
//         scrollTop: $($(this).attr('href')).offset().top
//     }, 2000);
// });
