$(document).ready(function() {

  $("#feedbackform").on("submit", function() {

    var fname_sub     = $("#firstname").prop("validity").valid;
    var lname_sub     = $("#lastname").prop("validity").valid;
    var email_sub     = !$("#useremail").prop("validity").valueMissing;
    var email_valid   = !$("#useremail").prop("validity").typeMismatch;
    var positives_sub = $("#positives").prop("validity").valid;
    var negatives_sub = $("#negatives").prop("validity").valid;


    if(!fname_sub){ $("#fnameError").show();} else{ $("#fnameError").hide(); }
    if(!lname_sub){ $("#lnameError").show();} else{ $("#lnameError").hide();}
    if(!email_sub || !email_valid){ $("#emailErrorNoEmail").show(); } else{ $("#emailErrorNoEmail").hide();}
    if(!positives_sub){ $("#positivesError").show();} else{ $("#positivesError").hide();}
    if(!negatives_sub){ $("#negativesError").show();} else{ $("#negativesError").hide();}

    return (fname_sub && lname_sub && email_sub && email_valid && positives_sub && negatives_sub);

  });
});
