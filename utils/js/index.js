$(function () {

    //get input width
    var input_org_width = $('#un').width();

    //input shift problem resolution 
    function ispr(its) {
        if (input_org_width - $(its).width() < 27)
            $(its).width($(its).width() - 27 + "px");
    }

    //input shift back
    function isb(its) {
        $(its).width(input_org_width);
    }

    //show error function
    function index_showErr(element, content) {
        $(element).siblings('.err').html(content);
        $(element).siblings('.err').css('margin-left', '3px');
    }

    //increase number of visits show form accordingly
    var visitedEarlier = JSON.parse(localStorage.getItem("visitedEarlier"));
    if (visitedEarlier) {
        visitedEarlier = {
            "new": false,
            "visits": visitedEarlier["visits"] + 1
        };
        //increase visits
        localStorage.setItem("visitedEarlier", JSON.stringify(visitedEarlier));
    } else {
        //new visitor
        visitedEarlier = {
            "new": false,
            "visits": 1
        };
        localStorage.setItem("visitedEarlier", JSON.stringify(visitedEarlier));
        //show signup, hide login
        $("#login_card").hide();
        $("#signup_card").show();
    }

    //placeholder styling on focus
    $('input').focus(function () {
        $(this).addClass("placeholder_pseudo_class");
    }).blur(function () {
        $(this).removeClass("placeholder_pseudo_class");
    });

    //show signup form
    $('#ltsu').click(function () {
        $("#login_card").hide();
        $("#signup_card").show();
    });

    //show login form
    $('#sutl').click(function () {
        $("#signup_card").hide();
        $("#login_card").show();
    });

    /*
    //input js validation
    */
    $('input').on('keyup', function () {
        //reduce input size
        ispr($(this));
        //no input
        if ($(this).val().length < 1) {
            //modify title acc. to need
            var title = " can not have less than 1 character!";
            if ($(this).prop("id") == "un" || $(this).prop("id") == "su_un") title = "Username" + title;
            else if ($(this).prop("id") == "psw" || $(this).prop("id") == "su_psw") title = "Password" + title;
            else if ($(this).prop("id") == "fn") title = "Full Name" + title;
            else title = "Email Address" + title;
            //add proper class
            if ($(this).prop("id") == "psw" || $(this).prop("id") == "su_psw") {
                $(this).siblings('.err').removeClass("fs-19");
                $(this).siblings('.err').addClass("fs-22");
            }
            //show error
            index_showErr($(this), '<i class="far fa-times-circle" title="' + title + '"></i>');
        //input length checks etc.
        } else {
            //
            //for password
            if ($(this).prop("id") == "psw" || $(this).prop("id") == "su_psw") {
                //add proper class
                $(this).siblings('.err').removeClass("fs-22");
                $(this).siblings('.err').addClass("fs-19");
                //show buttons
                if ($(this).prop('type') == "text")
                    index_showErr($(this), '<i class="far fa-eye-slash cur-p" title="Hide Password"></i>');
                else
                    index_showErr($(this), '<i class="fas fa-eye cur-p" title="Show Password"></i>');
                return;
            }
            //
            //for username
            if ($(this).prop("id") == "un" || $(this).prop("id") == "su_un") {
                if ($(this).val().length > 32) {
                    //show error
                    index_showErr($(this), '<i class="far fa-times-circle" title="Username can not have more than 32 characters!"></i>');
                    return;
                }
                if ($(this).prop("id") == "su_un") {
                    //username is in valid range
                    //ajax or whatever way to check username, use fn for that
                    index_showErr($(this), '<i class="far fa-check-circle" title="Valid Username"></i>');
                    return;
                }
            }
            //
            //for fullname or email
            if ($(this).prop("id") == "fn" || $(this).prop("id") == "eml") {
                if ($(this).val().length > 256) {
                    //modify title
                    var title = " can not have more than 256 characters!";
                    if ($(this).prop("id") == "fn") title = "Fullname" + title;
                    else title = "Email Address" + title;
                    //show error
                    index_showErr($(this), '<i class="far fa-times-circle" title="' + title + '"></i>');
                    return;
                }
            }
            //input is correct
            $(this).siblings('.err').html("");
            $(this).siblings('.err').css('margin-left', '0');
            isb($(this));
        }
    });

    //getstarted form submission
    $('#signup_form').on('submit', function (e) {
        if ($('#fn').val().length < 1 || $('#su_un').val().length < 1 ||
            $('#su_psw').val().length < 1 || $('#eml').val().length < 1) {
            $('#fn').focus();
            return false;
        } else {
            e.preventDefault();
            $('#su_submit').html('<b>Signing You Up <i class="fa fa-spinner fa-spin"></i></b>');
        }
    });

    //login form submission
    $('#login_form').on('submit', function (e) {
        if ($('#un').val().length < 1 || $('#psw').val().length < 1) {
            $('#un').focus();
            return false;
        } else {
            e.preventDefault();
            $('#login_submit').prop('disabled', true);
            $('#login_submit').html('<b>Authenticating <i class="fa fa-spinner fa-spin"></i></b>');
        }
    });

    //show and hide password
    $('.passErr').click(function () {
        if ($(this).prev('input').prop('type') == "text") {
            $(this).html('<i class="fas fa-eye cur-p" title="Show Password"></i>');
            $(this).prev('input').prop('type', 'password');
        } else {
            $(this).html('<i class="far fa-eye-slash cur-p" title="Hide Password"></i>');
            $(this).prev('input').prop('type', 'text');
        }
    });

    //
});