//Change Password
$(document).on('submit', '#change_password', function (e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "change_password.php",
        data: $(this).serialize(),
        success: function (data) {
            $("#msg").html(data);
        }
    });
});

//new password
$(document).on('submit', '#newPassword', function (e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "new_password_ajax.php",
        data: $(this).serialize(),
        success: function (data) {
            $("#msg").html(data);
        }
    });
});

//forgot/change Password
$(document).on('submit', '#forgot', function (e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: "forgot.php",
        data: $(this).serialize(),
        success: function (data) {
            $("#msg").html(data);
        }
    });
});

//User login
$(document).on('submit', '#loginUser', function (e) {
    e.preventDefault();

    var email = $("#email").val().trim();
    var password = $("#password").val().trim();

    if (email != "" && password != "") {
        $.ajax({
            url: 'check_user.php',
            type: 'post',
            data: {
                email: email,
                password: password
            },
            success: function (response) {
                var msg = "";
                if (response == 1) {
                    window.location = "home.php";
                } else {
                    msg = "Invalid email and password!";
                }
                $("#msg").html(msg);
            }
        });
    }
});

//insert validation data
$(document).on('submit', '#userForm', function (e) {
    e.preventDefault();

    $.ajax({
        method: "POST",
        url: "ajax_validation.php",
        data: $(this).serialize(),
        success: function (data) {
            $('#msg').html(data);
            $('#userForm').find('input')
            // .val('')
        }
    });
});

//update validation data
$(document).on('submit', '#updateForm', function (e) {
    e.preventDefault();
        $.ajax({
            url: "update_validation.php",
            method: "POST",
            data: $('form').serialize(),
            // dataType: "text",
            success: function (strMessage) {
                // window.location = "index.php";
                $('#message').html(strMessage)
            },
        });
    });

//Designation dropdown
$(document).ready(function () {
    $.ajax({
        url: "designation_ajax.php",
        type: "POST",
        success: function (data) {
            $("#designation").append(data);
            $("#designation").find();
            jQuery("#designation_val_id").val();
            var designation_id = $("#designation_val_id").val();
            $("#designation").val(designation_id);
        }
    });
});

//state dropdown 
$(document).ready(function () {
    // var state = $('#state')
    $.ajax({
        url: "state_ajax.php",
        type: "POST",
        success: function (data) {
            $("#state").append(data);
            $("#state").find();
            jQuery("#state_val_id").val();
            var state_id = $("#state_val_id").val();
            $("#state").val(state_id);
        }
    });
});
//city dropdown
$(document).ready(function () {
    // var state = $('#state')
    $.ajax({
        url: "city_ajax.php",
        type: "POST",
        success: function (data) {
            $("#city").append(data);
            $("#city").find();
            jQuery("#city_val_id").val();
            var city_id = $("#city_val_id").val();
            $("#city").val(city_id);
        }
    });
});
//city_state dependent
$(document).ready(function () {

    $('#state').change(function () {
        loadCity($(this).find(':selected').val())
    })


});

function loadState() {
    $.ajax({
        type: "POST",
        url: "state_city_ajax.php",
        data: "get=state"
    }).done(function (result) {

        $(result).each(function () {
            $("#state").append($(result));
        })
    });
}

function loadCity(stateId) {
    $("#city").children().remove()
    $.ajax({
        type: "POST",
        url: "state_city_ajax.php",
        data: "get=city&id=" + stateId
    }).done(function (result) {

        $("#city").append($(result));

    });
}


loadState();

