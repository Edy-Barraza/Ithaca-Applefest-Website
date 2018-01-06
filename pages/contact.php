<?php
$HIDDEN_ERROR_CLASS = "hiddenError";
$submit = $_REQUEST["submit"];
if (isset($submit)) {
  error_log("user submitted form");
  $firstName = $_REQUEST["firstname"];
  $lastName = $_REQUEST["lastname"];
  $email = $_REQUEST["useremail"];
  $posFeedback= $_REQUEST["positives"];
  $negFeedback = $_REQUEST["negatives"];

  if ( !empty($firstName) ) { $fnameValid = true;
  } else { $fnameValid = false;  }

  if ( !empty($lastName) ) { $lnameValid = true;
  } else { $lnameValid = false; }

  if ( !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) ) { $emailValid = true;
  } else { $emailValid = false; }

  if ( !empty($posFeedback) ) { $posValid = true;
  } else { $posValid = false;  }

  if ( !empty($negFeedback) ) { $negValid = true;
  } else { $negValid = false; }

  $formValid = $fnameValid && $lnameValid && $emailValid && $posValid && $negValid;
  if ($formValid) {
    session_start();
    $_SESSION['firstname'] = $firstName;
    $_SESSION['lastname'] = $lastName;
    $_SESSION['useremail'] = $email;
    $_SESSION['positives'] = $posFeedback;
    $_SESSION['negatives'] = $negFeedback;
    header("Location: contact_response.php");
    return;
  }
} else {
  error_log("no form submitted");
  $fnameValid = true;
  $lnameValid = true;
  $emailValid = true;
  $posValid = true;
  $negValid = true;
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Apple Fest Contact</title>
  <link rel="stylesheet" type="text/css" href="../styles/all.css" media="all"/>
  <script src="../scripts/jquery-3.2.1.min.js"></script>
  <script src="../scripts/jquery.validate.min.js"></script>

  <!-- Comment out script bellow to disable client-side validation -->
  <script src="../scripts/webform.js" type="text/javascript"></script>

</head>

<body>

<header>
  <h2><a href = "../index.php"><img src = "../images/apple.png" alt="apple logo"> 35th Annual <br> Apple Harvest Festival</a></h2>
  <h1>FEEDBACK</h1>

  <form method="post" name="feedback" action="contact.php" id="feedbackform" novalidate >

    <label>First Name</label> <br>
    <input type="text" name="firstname" placeholder="Pancho" id="firstname" value="<?php echo($firstName);?>" required/>
    <div class="errorContainer  <?php if ($fnameValid) { echo($HIDDEN_ERROR_CLASS); } ?>" id="fnameError">First name is required </div>


    <label>Last Name</label><br>
    <input type="text" name="lastname" placeholder="Villa"  id="lastname" value="<?php echo($lastName);?>" required/>
    <div class="errorContainer  <?php if ($lnameValid) { echo($HIDDEN_ERROR_CLASS); } ?>" id="lnameError">Last name is required.</div>


    <label>Email</label><br>
    <input type ="email" name="useremail" placeholder="panchovilla@gmail.com" id="useremail" value="<?php echo($email);?>" required/>
    <div class="errorContainer  <?php if ($emailValid) { echo($HIDDEN_ERROR_CLASS); } ?>" id="emailErrorNoEmail">Please provide a valid email.</div>




    <label>What did you like about the event?</label><br>
    <input type="text" name="positives" id = "positives" placeholder="Tell us what you think!"
    class="large_inputs" value="<?php echo($posFeedback);?>" required>
    <div class="errorContainer  <?php if ($posValid) { echo($HIDDEN_ERROR_CLASS); } ?>" id="positivesError">Please tell us what you liked about Apple Fest. </div>



    <label>What do you think we could do better?</label><br>
    <input type="text" name="negatives" id="negatives" placeholder="Tell us what you think!"
    class="large_inputs" value="<?php echo($negFeedback);?>" required><br>
    <div class="errorContainer  <?php if ($negValid) { echo($HIDDEN_ERROR_CLASS); } ?>" id="negativesError">Please tell us how we could improve Apple Fest. </div>



    <button type="submit" name="submit" class="submit">Submit</button>

  </form>


</header>
<?php include("../includes/navigation.php"); include("../includes/footer.php"); ?>
</body>
</html>
