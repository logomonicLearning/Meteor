
		function validateForm(){
			var name, email, subject, message;

			name=document.getElementById('name');
			email=document.getElementById('email');
			subject=document.getElementById('subject');
			message=document.getElementById('message');

			if (name.value == "") {
			    document.getElementById('error-name').innerHTML =  "First name must be filled out";
			    name.focus();
			    return false;
			}

			if (email.value == "") {
			   
			    document.getElementById('error-email').innerHTML =  "Email must be filled out";
			    email.focus();
			    return false;
			}

			var atpos = email.value.indexOf("@");
			var dotpos = email.value.lastIndexOf(".");

			if (atpos < 1 || (dotpos - atpos < 2)) {
			    console.log(dotpos - atpos)
			    document.getElementById('error-email').innerHTML =  "Please enter correct email";
			    email.focus();
			    return false;
			}

			if (subject.value == "") {
			   
			    document.getElementById('error-subject').innerHTML =  "Enter a subject";
			    subject.focus();
			    return false;
			}

			if (message.value == "") {
			   
			    document.getElementById('error-message').innerHTML =  "Enter a message";
			    message.focus();
			    return false;
			}


		}




	