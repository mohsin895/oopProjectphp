$(document).ready(function(){
	const site_url= "http://localhost/project1/";
	$('#showSignupForm').click(function(){
		$("#login-form-box").hide();
		$("#register-form-box").show();
	});


	$('#showSignInForm').click(function(){
		$("#register-form-box").hide();
		$("#login-form-box").show();

	});


$('#showForgottPasswordForm').click(function(){
		$("#login-form-box").hide();
		$("#forgotten-form-box").show();
	});


	$('#showSignForm').click(function(){
		$("#forgotten-form-box").hide();
		$("#login-form-box").show();

	});

	$('#registerUser').click(function(e){
		if ($("#register-form")[0].checkValidity()) {
			e.preventDefault();
		$("#registerUser").val("Loading...").attr('disabled',true);
		if ($("#name").val() ==='') {
			$("#name").addClass("is-invalid");
			// $("#name").removeClass("is-valid");

		}else{
			$("#name").removeClass("is-invalid");
			// $("#name").addClass("is-valid");


		}

			if ($("#r_email").val() ==='') {
			$("#r_email").addClass("is-invalid");
			// $("#r_email").removeClass("is-valid");
		}else{
			$("#r_email").removeClass("is-invalid");
			// $("#r_email").addClass("is-valid");

		}


			if ($("#r-password").val() ==='') {
			$("#r-password").addClass("is-invalid");
			// $("#r-password").removeClass("is-valid");


		}else{
			$("#r-password").removeClass("is-invalid");
			// $("#r-password").addClass("is-valid");


		}

			if ($("#r-password").val() !== $("#c_password").val()) {
				// $("#c_password").removeClass("is-valid");
			$("#c_password").addClass("is-invalid");
		}else{
			$("#c_password").removeClass("is-invalid");
			// $("#c_password").addClass("is-valid");

		}
		if ($("#r-password").val() === $("#c_password").val()) {
			if ($('#name').val !=='' &&$('#c_password').val() !=='') {
				$.ajax({
					url: site_url+ "admin/action.php",
					method: 'post',
					data: $('#register-form').serialize() + '&action=register',
					success:function(response){
						if (response === 'Ok'){
							window.location = 'index.php';
						}else {
							$('#registerError').html(response);
						}


					}
				})
			}

		}

			$("#registerUser").val("Register").attr('disabled',false);

	   }
	});

	$('#loginBtn').click(function(e){
		if ($('#login-form')[0].checkValidity()){
			e.preventDefault();
			$("#loginBtn").val("loading...").attr("disabled",true);

            $.ajax({
                url: site_url+ "admin/action.php",
                method: 'post',
                data: $('#login-form').serialize() + '&action=login',
                success:function(response){
                    $("#loginBtn").val("Sig In").attr("disabled",false);
                    if (response === 'Ok'){
                        window.location = 'index.php';
                    }else {
                        $('#loginError').html(response);
                    }


                }
            })
		}
	});

});
