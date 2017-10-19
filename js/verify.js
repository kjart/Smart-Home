// the beginning of the scripting document function 
$(document).ready(function(){

// this executes on click of the living room's light
	$('.submit').click(function(e){
		e.preventDefault();
	var recieve = $('#email').val();
	/*the function below will check if the email of the user is in the database so that the user can reset 
	thier password*/
				$.ajax({
					type : "POST",
					url : "verify_email.php",
					data:{email :recieve},
					success:function(response){
						//alert("data submitted succesfully");
						var status = response;
						alert(status);
						/*$.ajax({
						url:"verify_email.php",
						type:'GET',
						dataType:"json",
						success:function(rel){
							var rel = rel;
							var status = rel.Email;
							alert("was successful");
							if (status != ""){
								$('.verify').text("your email has been verified..please click here to reset your password");
					
							}
							else{
								$('.verify').text("oooops!looks like you are not registered with us...please click here to register!");
				
							}
						}
						});*/
					}
						});
					
	});// end select function
});