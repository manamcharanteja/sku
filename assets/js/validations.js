 $(document).ready(function(){
    $("#info-form").validate({
        rules: {
            "name": {
                required: true,
            },
            "email": {
                required: true,
                email:true
            },
            "phone":{
                required: true,
            },
            "info-campus":{
                required: true,
            },
            "info-college":{
                required: true,
            }
        },

        submitHandler: function (form, e) {
             e.preventDefault();
             /*console.log( $( form ).serializeArray() );*/
             $("#info-form-submit").attr("disabled", true);
             $.ajax({
                    url: form.action,
                    type: form.method,
                    data: $(form).serialize(),
                    success: function(response) {
                        console.log(response);
                        $('#info-form')[0].reset();

                        $("#info-form-submit").removeAttr('disabled');

                        $("#info-form .alert-success").show().fadeOut(9000);
                        $('#info-form #msg').html(response);

                    }
			 });
        }
    });

});

$(document).ready(function(){
    $("#form-vsp").validate({
        rules: {
            "area": {
                required: true,
            },
            "name": {
                required: true,
            },
            "email": {
                required: true,
                email:true
            },
            "phone":{
                required: true,
                digits:true,
                uidValid:true,
				minlength:10
            },

        },

        submitHandler: function (form,e) {
            e.preventDefault();

            /*var $captcha = $('#recaptcha'),
    response = grecaptcha.getResponse();
    //alert(response);
    if (response.length === 0)
    {
        $('.msg-error').text("reCAPTCHA is mandatory");
        return false;

        if(!$captcha.hasClass("error"))
        {
            $captcha.addClass("error");
        }
    }
    else
    {
        $('.msg-error').text('');
        $captcha.removeClass("error");
        }*/


            $("#form-vsp-submit").attr("disabled", true);
            if($("#hidden-emails-vsp").val()==""){
                alert("No address found!");
                $("#form-vsp-submit").removeAttr('disabled');
                return false;
            }
            else{
            /*alert($("#hidden-emails-vsp").val());
            form.submit();*/
                 $.ajax({
                    url: form.action,
                    type: form.method,
                    data: $(form).serialize(),
                    success: function(response) {
                        /*console.log(response);*/


                        if($.trim(response)==1){
                            $("#VSP").html("");
							 $('#form-vsp')[0].reset();
							$("#form-vsp-submit").removeAttr('disabled');
                            $("#form-vsp .alert-success").show().fadeOut(9000);
                            $('#form-vsp .msg').html("Successfully submited, We'll get back to you soon!");
                        }
                        else if($.trim(response)=='00'){
							  $('#form-vsp')[0].reset();
							$("#form-vsp-submit").removeAttr('disabled');
                            $("#form-vsp .alert-danger").show().fadeOut(9000);
                            $('#form-vsp .msg').html("Please select program");
                        }
                         else if($.trim(response)=="000"){
                           /* console.log(response);*/
							 $("#form-vsp-submit").removeAttr('disabled');
                            $("#form-vsp .alert-danger").show().fadeOut(9000);
                            $('#form-vsp .msg').html("please enter valid captcha");
							$('#form-vsp #captcha_vsp').val('');
                        }
						else {
							$("#form-vsp-submit").removeAttr('disabled');
                            $("#form-vsp .alert-danger").show().fadeOut(9000);
                            $('#form-vsp .msg').html("Invalid mails");
						}

                    }
			     });
            }
        }
    });

});

$(document).ready(function(){
    $("#form-hyd").validate({
        rules: {
            "area": {
                required: true,
            },
            "name": {
                required: true,
            },
            "email": {
                required: true,
                email:true
            },
            "phone":{
                required: true,
                digits:true,
				uidValid:true,
				minlength:10
            },

        },

        submitHandler: function (form,e) {
            e.preventDefault();

           /* var $captcha = $('#recaptcha'),
    response = grecaptcha.getResponse();
    //alert(response);
    if (response.length === 0)
    {
        $('.msg-error').text("reCAPTCHA is mandatory");
        return false;

        if(!$captcha.hasClass("error"))
        {
            $captcha.addClass("error");
        }
    }
    else
    {      $('.msg-error').text('');
        $captcha.removeClass("error");
        }*/

            $("#form-hyd-submit").attr("disabled", true);
            if($("#hidden-emails-hyd").val()==""){
                alert("No address found!");
                $("#form-hyd-submit").removeAttr('disabled');
                return false;
            }
            else{
            /*alert($("#hidden-emails-vsp").val());
            form.submit();*/
                 $.ajax({
                    url: form.action,
                    type: form.method,
                    data: $(form).serialize(),
                    success: function(response) {
                        /*console.log(response);*/


                         if($.trim(response)==1){
							$('#form-hyd')[0].reset();
							$("#form-hyd-submit").removeAttr('disabled');
                            $("#HYD").html("");
                            $("#form-hyd .alert-success").show().fadeOut(9000);
                            $('#form-hyd .msg').html("Successfully submited, We'll get back to you soon!");
                        }
                        else if($.trim(response)=='00'){
							$("#form-hyd-submit").removeAttr('disabled');
		                    $("#form-hyd .alert-danger").show().fadeOut(9000);
                            $('#form-hyd .msg').html("Please select program");
                        }
                        else if($.trim(response)=="000"){
							$("#form-hyd-submit").removeAttr('disabled');
                            $("#form-hyd .alert-danger").show().fadeOut(9000);
                            $('#form-hyd .msg').html("Please enter valid captcha");
							$('#form-hyd #captcha_hyd').val('');
						}
                        else if($.trim(response)=="0000"){
							$("#form-hyd-submit").removeAttr('disabled');
                            $("#form-hyd .alert-danger").show().fadeOut(9000);
                            $('#form-hyd .msg').html("Please fill all feilds");
							$('#form-hyd #captcha_hyd').val('');
						}
                        else {
							$("#form-hyd-submit").removeAttr('disabled');
                            $("#form-hyd .alert-danger").show().fadeOut(9000);
                            $('#form-hyd .msg').html("Invalid mails");
						}

                    }
			     });
            }
        }
    });

});

$(document).ready(function(){
    $("#form-blr").validate({
        rules: {
            "area": {
                required: true,
            },
            "name": {
                required: true,
            },
            "email": {
                required: true,
                email:true
            },
            "phone":{
                required: true,
                digits:true,
				uidValid:true,
				minlength:10
            },

        },

        submitHandler: function (form,e) {
            e.preventDefault();

          /*  var $captcha = $('#recaptcha'),
    response = grecaptcha.getResponse();
    //alert(response);
    if (response.length === 0)
    {
        $('.msg-error2').text("reCAPTCHA is mandatory");
        return false;

        if(!$captcha.hasClass("error2"))
        {
            $captcha.addClass("error2");
        }
    }
    else
    {
        $('.msg-error2').text('');
        $captcha.removeClass("error2");
        }*/
            $("#form-blr-submit").attr("disabled", true);
            if($("#hidden-emails-blr").val()==""){
                alert("No address found!");
                $("#form-blr-submit").removeAttr('disabled');
                return false;
            }
            else{
            /*alert($("#hidden-emails-vsp").val());
            form.submit();*/
                 $.ajax({
                    url: form.action,
                    type: form.method,
                    data: $(form).serialize(),
                    success: function(response) {
                        /*console.log(response);*/


                        if($.trim(response)==1){
                            $("#form-blr-submit").removeAttr('disabled');
							$('#form-blr')[0].reset();
                            $("#BLR").html("");
                            $("#form-blr .alert-success").show().fadeOut(9000);
                            $('#form-blr .msg').html("Successfully submited, We'll get back to you soon!");
                        }
                        else if($.trim(response)=='00'){
							$('#form-blr')[0].reset();
                            $("#form-blr-submit").removeAttr('disabled');
                            $("#form-blr .alert-danger").show().fadeOut(9000);
                            $('#form-blr .msg').html("Please select program");
                        }
                        else if($.trim(response)=="000"){
							//console.log(response);
							$("#form-blr-submit").removeAttr('disabled');
                            $("#form-blr .alert-danger").show().fadeOut(9000);
                            $('#form-blr .msg').html("please enter valid captcha");
							$('#form-blr #captcha_blr').val('');
                        }
						else {
							$("#form-blr-submit").removeAttr('disabled');
                            $("#form-blr .alert-danger").show().fadeOut(9000);
                            $('#form-blr .msg').html("Invalid mails");
						}

                    }
			     });
            }
        }
    });

});

$(document).ready(function(){
    $("#caste-discrimination-form").validate({
        rules: {
            "full_name": {
                required: true,
            },
            "regdno": {
                required: true,
            },
            "campus": {
                required: true,
            },
            "phone":{
                required: true,
                uidValid:true,
				uidValid:true,
				minlength:10
            },
            "email":{
                required: true,
                email:true
            },
			        },

        submitHandler: function (form,e) {
            e.preventDefault();
            $("#caste-submit").attr("disabled", true);

                 $.ajax({
                    url: form.action,
                    type: form.method,
                    data: $(form).serialize(),
                    success: function(response) {
                        console.log(response);

						 if($.trim(response)=='000'){
							$("#caste-submit").removeAttr('disabled');
                            $("#caste-discrimination-form .alert-danger").show().fadeOut(9000);
                            $('#caste-discrimination-form .modal-footer').append('<div class="alert alert-danger alert-dismissible "><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>please enter valid captcha</div><div class="clearfix"></div>');
							 	$('#caste-discrimination-form #captcha_cast').val('');
                        }
                        else if($.trim(response)=='00'){
                           $("#caste-submit").removeAttr('disabled');
                           $("#caste-discrimination-form .alert-danger").show().fadeOut(9000);
                           $('#caste-discrimination-form .modal-footer').append('<div class="alert alert-danger alert-dismissible "><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Please enter valid registration number</div><div class="clearfix"></div>');
                               $('#caste-discrimination-form #captcha_cast').val('');
                       }
                        else{
                            $('#caste-discrimination-form')[0].reset();
                            $("#caste-submit").removeAttr('disabled');
                            $("#caste-discrimination-form .alert-success").show().fadeOut(9000);
                            $('#caste-discrimination-form #msg').html(response);
                        }

                    }
			     });
        }

    });
});

 $(document).ready(function(){
    $("#eva-contact").validate({
        rules: {
            "name": {
                required: true,
            },
            "email": {
                required: true,
                email:true
            },
            "phone":{
                required: true,
				digits:true,
				uidValid:true,
				minlength:10
            },
            "regdno":{
                required: true,
                digits:true
            },
	  },

        submitHandler: function (form, e) {
             e.preventDefault();
             /*console.log( $( form ).serializeArray() ); */
             $("#eval-contact-form-submit").attr("disabled", true);
             $.ajax({
                    url: form.action,
                    type: form.method,
                    data: $(form).serialize(),
                    success: function(response) {
                        /*console.log(response); */
                        if($.trim(response)=="000"){
                             $("#eval-contact-form-submit").removeAttr('disabled');
                            $("#eva-contact .alert-success").show().fadeOut(9000);
                            $('#eva-contact #msg').html("please enter valid captcha");
							 $('#eva-contact #captcha_code').val('');
                        }
                        else{
                            $('#eva-contact')[0].reset();
                            $("#eval-contact-form-submit").removeAttr('disabled');
                            $("#eva-contact .alert-success").show().fadeOut(9000);
                            $('#eva-contact #msg').html(response);
                        }

                    }
			 });
        }
    });

});

$(document).ready(function(){
    $("#media-contact-form").validate({
        rules: {
            "name": {
                required: true,
            },
            "email": {
                required: true,
                email:true
            },
            "phone":{
                required: true,
				digits:true,
				uidValid:true,
				minlength:10
            },
            "campus":{
                required: true
            },

        },

        submitHandler: function (form, e) {
             e.preventDefault();
             console.log( $( form ).serializeArray() );
             $("#media-contact-form-submit").attr("disabled", true);
             $.ajax({
                    url: form.action,
                    type: form.method,
                    data: $(form).serialize(),
                    success: function(response) {
                        /*console.log(response); */

						  if($.trim(response)=="000"){
                            $("#media-contact-form-submit").removeAttr('disabled');
                            $("#media-contact-form .alert-success").show().fadeOut(9000);
                            $('#media-contact-form #msg').html("please enter valid captcha");
							$('#media-contact-form #captcha_codemedia').val('');

                        }
                        else{
                            $('#media-contact-form')[0].reset();
                            $("#media-contact-form-submit").removeAttr('disabled');
                            $("#media-contact-form .alert-success").show().fadeOut(9000);
                            $('#media-contact-form #msg').html(response);
                        }


                    }
			 });
        }
    });

});
