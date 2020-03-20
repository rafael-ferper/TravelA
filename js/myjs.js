/* -- Google API -- */
var searchOrigin = 'origin';
var searchDest = 'destination';
$(document).ready(function () {
	var autocomplete;
	autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchOrigin)));
});

$(document).ready(function () {
	var autocomplete;
	autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchDest)));
});

/* -- Phone Validation -- */
$(document).ready(function () {
	var SPMaskBehavior = function (val) {
		return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
	},
		spOptions = {
			onKeyPress: function (val, e, field, options) {
				field.mask(SPMaskBehavior.apply({}, arguments), options);
			}
		};

	$('#phone').mask(SPMaskBehavior, spOptions);
});
/* -- Form Validation -- */
$(document).ready(function () {
	$("#tform").validate({
		rules: {
			name: {
				required: true,
				maxlength: 50
			},
			phone: {
				required: true
			},
			origin: {
				required: true,
				maxlength: 100
			},
			destination: {
				required: true,
				maxlength: 100
			},
			dateTo: {
				required: true,
				date: true
			},
			dateFrom: {
				required: true,
				date: true
			},
			tnumber: {
				required: true,
				min: 1
			}
		}
	});
});

/* -- Checks if locations are the same -- */
function locat() {
	var orig = document.getElementById('origin').value;
	var dest = document.getElementById('destination').value;

	if (orig == dest) {
		alert('The destination must be different from the origin.');
		return false;
	}
	return true;
}

/* -- Checks for retroactive dates -- */
function checkdate() {
	var tform = document.tform;
	var date_1 = new Date(tform.dateTo.value);
	var date_2 = new Date(tform.dateFrom.value);
	if (!date_1 || !date_2) return false;
	if (date_1 > date_2) {
		alert("'Date from' must be the same day or greater than 'date to'.");
		return false;
	} else {
		return true;
	}
}

/* -- Only numbers -- */
function justnumb(num) {
	var er = /[^0-9.]/;
	er.lastIndex = 0;
}

/* -- Performing the check -- */
window.onload = function () {

	var form = document.getElementById("tform");
	var onsubmit = function (event) {
		event.preventDefault();

		if (!locat() || !checkdate()) {
			
		}
		else{
			form.submit();
		}
	}

	form.addEventListener("submit", onsubmit);
}