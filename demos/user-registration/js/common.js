/*
 * All common Js file added here
 */

/*
 * Registration form validation
 */
	$(document).ready(function() {
		

		// validate signup form on keyup and submit
		$("#regForm").validate({
			rules: {
				name: "required",
				imgupload:"required",			
				password: {
					required: true,
					minlength: 5
				},
				confpassword: {
					required: true,
					minlength: 5,
					equalTo: "#password"
				},
				email: {
					required: true,
					email: true
				}
			},
			messages: {
				name: "Please enter your name",
				imgupload:"Please Upload your profile image",
				password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				},
				confpassword: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long",
					equalTo: "Please enter the same password as above"
				},
				email: "Please enter a valid email address"
				
			}
		});
                
   /*
    * Validation for login page
    */             
                
          
		// validate signup form on keyup and submit
		$("#loginForm").validate({
			rules: {
				userid: "required",
				password:"required"
			},
			messages: {
				userid: "Please enter your name",
				password:"Please enter your password",
			}
		});      
                
            });