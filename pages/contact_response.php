<?php
session_start();
$firstName = $_SESSION['firstname'];
$lastName = $_SESSION['lastname'];
$email = $_SESSION['useremail'];
$posFeedback = $_SESSION['positives'];
$negFeedback = $_SESSION['negatives'];
unset($_SESSION['useremail']);
$fullName = $firstName . " " . $lastName;
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
<!--  <script src="../scripts/webform.js" type="text/javascript"></script> -->
</head>
<body>
<header>
  <h2><a href = "../index.php"><img src = "../images/apple.png" alt="apple logo"> 35th Annual <br> Apple Harvest Festival</a></h2>
  <h1>Thank You For Your Response!</h1>
      <p><?php echo( htmlspecialchars($fullName) ); ?>, we appreciate your feedback. We will respond to you at <?php echo( htmlspecialchars($email) ); ?>
      if appropriate. Just as a reminder, you gave us the feedback: </p>
      <p>What you liked about the event: <em><?php echo( htmlspecialchars($posFeedback) ); ?>
      </em></p>
      <p>What you thought we could have done better: <em><?php echo( htmlspecialchars($negFeedback) ); ?>
      </em></p>
  <img id="response" src= "../images/contact.jpg" alt="apples for response page">
</header>
  <?php include("../includes/navigation.php"); include("../includes/footer.php"); ?>
  </body>
  </html>
