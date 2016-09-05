<?php 
if(isset($_POST["submit"])) {
  $to = "vonvikky@gmail.com"; // this is your Email address
  $from = test_input($_POST["email"]); // this is the sender's Email address
  $first_name = test_input($_POST["first_name"]);
  $last_name = test_input($_POST["last_name"]);
  $country = $_POST["country"];
  $state = $_POST["state"];
  $body = test_input($_POST['message']);
  $subject = "Contact form submission";
  $message = $first_name . " " . $last_name ." ". "in ". $state. " ". $country.  " wrote the following:" . "\n\n" . $body;
  $headers = "From:" . $from;
  mail($to, $subject, $message, $headers); 
} else {
  header("location: http://localhost/morren/index.php?controller=pages&action=contact");
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Morren-Xris Hotels</title>

    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link type="text/css" rel="stylesheet" href="views/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="views/css/style.css">

    <script type="text/javascript" src="views/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="views/js/materialize.min.js"></script>
  </head>
  <body>
    <header>
      <nav class="lime lighten-2">
        <div class="container">
          <div class="nav-wrapper">
            <a href="#" class="brand-logo"> Morren-Xris </a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="/morren">HOME</a></li>
              <li><a href="?controller=pages&action=about">ABOUT US</a></li>
              <li><a href="#">GALLERY</a></li>
              <li><a href="?controller=pages&action=contact">CONTACT US</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>
      <div class="container">
        <div class="row">
          <div class="s12">
            <p class="text-justify flow-text">
              Your mail has been sent. Thank you <?php echo $first_name; ?> for reaching out to us. We will contact you shortly.
            </p>
            <p class="text-justify flow-text">
              This is a snapshot of your message: </br> <?php echo $message; ?>
            </p>
          </div>
        </div>
      </div>
    </main>
  <?php require_once("views/footer.php"); ?>