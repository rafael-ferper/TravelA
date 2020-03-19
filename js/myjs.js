var searchOrigin = 'origin';
		var searchDest = 'destination';

		$(document).ready(function(){
			var autocomplete;
			autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchOrigin)));
		});

		$(document).ready(function(){
			var autocomplete;
			autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchDest)));
			console.log(tform);
		});

		$(document).ready(function(){
			var SPMaskBehavior = function (val) {
				return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
			},
			spOptions = {
				onKeyPress: function(val, e, field, options) {
					field.mask(SPMaskBehavior.apply({}, arguments), options);
				}
			};

			$('#phone').mask(SPMaskBehavior, spOptions);
		});

		$(document).ready(function(){
			$("#tform").validate({
				rules:{
					name:{
						required: true,
						maxlength: 50
					},
					phone:{
						required: true
					},	
					origin:{
						required: true,
						maxlength:100
					},
					destination:{
						required: true,
						maxlength:100
					},
					dateTo:{
						required: true,
						date: true
					},
					dateFrom:{
						required: true,
						date: true
					},
					tnumber:{
						required: true,
						min: 1
					}
				}	
			});
		});

		

		

		window.onload = function(){

			var form = document.getElementById("tform");
			var onsubmit = function(event){
				event.preventDefault();

				if(!locat() || !checkdate() || !justnumb()){
				
				}else{
					form.submit();
				}
			}

			form.addEventListener("submit", onsubmit);
		}

		function locat() {
			var orig = document.getElementById('origin').value;
			var dest = document.getElementById('destination').value;

			if (orig == dest) {
				alert('O destino deve ser diferente da origem!');
				return false;
			}
			return true;
		}

		function checkdate(){
			var tform = document.tform;
			var date_1 = new Date(tform.dateTo.value);
			var date_2 = new Date(tform.dateFrom.value);
			if (!date_1 || !date_2) return false;
			if (date_1 > date_2) {
				alert("Data from não pode ser menor que date to!!");	
				return false;
			} else {
				return true;
			}
        }
        
        function justnumb(num) {
            var er = /[^0-9.]/;
            er.lastIndex = 0;
        }