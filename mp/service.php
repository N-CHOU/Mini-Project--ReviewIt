<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact Us Page</title>
    <link rel="stylesheet" href="contactus.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>

<div class="contact-section">

  <h1>Contact Us</h1>
  <div class="border"></div>
  <form class="contact-form" action="servicedata.php" method="post">
    <input type="text" name="name" id="name" class="contact-form-text" placeholder="Your name" required >
    <input type="email" name="email" id="email" class="contact-form-text" placeholder="Your email" required>
    <input type="text" name="phone" id="phone"class="contact-form-text" placeholder="Your phone" required>
    <textarea name="desc" id="desc" class="contact-form-text" placeholder="Your message"></textarea>
    <input type="submit" class="contact-form-btn" value="Send" >
    <!--<<button type="submit">Send</button>-->
  </form>

<div class="social-menu">
    <ul>
        <li><a href=""><i class="fa fa-facebook"></i></a></li>
        <li><a href=""><i class="fa fa-twitter"></i></a></li>
        <li><a href=""><i class="fa fa-instagram"></i></a></li>
        <li><a href=""><i class="fa fa-youtube"></i></a></li>
        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
      </ul>
</div>
</div>

</body>
</html>