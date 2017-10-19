
// this function will execute the form field if the following rules are satisfied
function regformhash(form, uid, email, password, confirm) {
// this checks if the name conforms to only letters
var name = uid
if(name.validity.patternMismatch){
	name.setCustomValidity("Only letters are allowed!");
	return false
} // end of if
else{
	name.setCustomValidity("");
}// end of else


// this function validates the email and checks if the pattern conforms to email
var email = email
  if(email.validity.typeMismatch){
		document.getElementById("email").setCustomValidity("please enter a correct email address");
		return false;
	}// end of if 
	else{
		email.setCustomValidity("");
	}// end of else
// validates both password and checks if there is a match before submittion
var pass2=confirm.value;
var pass1=password.value;
if(pass1!=pass2){
	confirm.setCustomValidity("Passwords Don't Match");
	return false;
}
else{
	confirm.setCustomValidity('');	 
//empty string means no validation error
}
/* this checks if the length of the password is more than eigth or not */
var pass = password.value;
var passd = pass.length;
var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
if(passd >= 6){ // uses an if statement to control the length of the password to be inserted
// this checks if the regular expression given is correct
	  if (!re.test(pass)) {
        password.setCustomValidity("Passwords must contain at least one number, one lowercase and one uppercase letter.  Please try again");
		return false;
		}
		else{
				password.setCustomValidity("");
			}
		}// end the if of lenght

else{
password.setCustomValidity("Password length must be at least 6 characters long!");
return false;
}
    // Create a new element input, this will be our hashed password field. 
    var p = document.createElement("input");

    // Add the new element to our form. 
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(password.value);

    // Make sure the plaintext password doesn't get sent. 
    password.value = "";
    confirm.value = "";

    // Finally submit the form. 
    form.submit();
	return true;
	 

}  // end the function regformhash

$(document).ready(function(){
$("p").click(function(){
$("#pa").hide();
});
$('.home-drop').click(function(){
$('.home-dropdown').css({"display":"block", "transition" : "0.5s"});

});
});// end of document function

// this script is for the log in page
function formhash(form, password) {
    // Create a new element input, this will be our hashed password field. 
    var p = document.createElement("input");

    // Add the new element to our form. 
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(password.value);

    // Make sure the plaintext password doesn't get sent. 
    password.value = "";

    // Finally submit the form. 
    form.submit();
}
function resetPassword(form, password, conf){
// Check each field has a value
    if (password.value == '' || conf.value == '') {
        alert('You must provide all the requested details. Please try again');
        return false;
    }
	// Check that the password is sufficiently long (min 6 chars)
    // The check is duplicated below, but this is included to give more
    // specific guidance to the user
    if (password.value.length < 6) {
        alert('Passwords must be at least 6 characters long.  Please try again');
        form.password.focus();
        return false;
    }
    
    // At least one number, one lowercase and one uppercase letter 
    // At least six characters 
    var re = /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/; 
    if (!re.test(password.value)) {
        alert('Passwords must contain at least one number, one lowercase and one uppercase letter.  Please try again');
        return false;
    }
    
    // Check password and confirmation are the same
    if (password.value != conf.value) {
        alert('Your password and confirmation do not match. Please try again');
        form.password.focus();
        return false;
    }
        
    // Create a new element input, this will be our hashed password field. 
    var p = document.createElement("input");

    // Add the new element to our form. 
    form.appendChild(p);
    p.name = "p";
    p.type = "hidden";
    p.value = hex_sha512(password.value);

    // Make sure the plaintext password doesn't get sent. 
    password.value = "";
    conf.value = "";

    // Finally submit the form. 
    form.submit();
    return true;
}






