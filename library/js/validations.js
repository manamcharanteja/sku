 $(document).ready(function () {
    $("#form").validate({
        rules: {
            "name": {
                required: true,
                // minlength: 5
            },
            "email": {
                required: true,
                email:true
            },
            "mobile": {
                required: true,
                // minlength: 5
            },
            "city": {
                required: true,
                
            },
            "course": {
                required: true,
                // minlength: 5
            },
            "capcha": {
                required: true,
                
            }


        },
        
        submitHandler: function (form) { // for demo
            alert('valid form submitted'); // for demo
            return false; // for demo
        }
    });

});