<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact Us Page</title>
    <!-- <link rel="stylesheet" href="contactus.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap');

*{
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
    
  }
  body{
    background-color: #111;
  }
  .contact-section{

    background-size: cover;
    padding: 40px 0;
  }
  .contact-section p{
    text-align: center;
    color: rgb(255, 251, 251);
    font-family: 'Oswald', sans-serif;
    font-size: 7vh;
  }
  .border{
    width: 200px;
    height: 10px;
    background: #F6AD34;
    margin: 20px auto;
  }
  
  .contact-form{
    max-width: 600px;
    margin: auto;
    padding: 0 10px;
    overflow: hidden;
  }
  
  .contact-form-text{
    display: block;
    width: 100%;
    box-sizing: border-box;
    margin: 16px 0;
    border: 0;
    background: #ba0001;
    padding: 20px 40px;
    outline: none;
    color: rgb(255, 255, 255);
    transition: 0.5s;
  }

  .contact-form-text::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: white;
    opacity: 1; /* Firefox */
  }

  /* .contact-form-text :placeholder{
      color: rgb(83, 11, 105);
  } */
  .contact-form-text:focus{
    box-shadow: 0 0 10px 4px #F6AD34;
  }
  textarea.contact-form-text{
    resize: none;
    height: 120px;
  }
  .contact-form-btn{
    float: right;
    border: 0;
    background: #F6AD34;
    color: black;
    padding: 12px 50px;
    cursor: pointer;
    transition: 0.5s;
    font-weight: bold;
  }
  .contact-form-btn:hover{
    background: #ba0001;
    color: white;
  }
  
  
.social-menu ul {
    position: absolute;
    top: 90vh;
    left: 50%;
    transform: translate(-50%, -50%);
    padding: 0;
    margin: 0;
    display: flex;
}
.social-menu ul li {
    list-style: none;
    margin: 0 10px;
}
.social-menu ul li .fa {
    color: #000000;
    font-size: 25px;
    line-height: 50px;
    transition: .5s;
}
.social-menu ul li .fa:hover {
    color: #ffffff;
}
.social-menu ul li a {
    position: relative;
    display: block;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: white;
    text-align: center;
    transition: 0.5s;
    transform: translate(0,0px);
    box-shadow: 0px 7px 5px rgba(0, 0, 0, 0.5);
}
.social-menu ul li a:hover {
    transform: rotate(0deg) skew(0deg) translate(0, -10px);
}
.social-menu ul li:nth-child(1) a:hover {
    background-color: #3b5999;
}
.social-menu ul li:nth-child(2) a:hover {
    background-color: #55acee;
}
.social-menu ul li:nth-child(3) a:hover {
    background-color: #e4405f;
}
.social-menu ul li:nth-child(4) a:hover {
    background-color: #cd201f;
}
.social-menu ul li:nth-child(5) a:hover {
    background-color: #0077B5;
}

  </style>
  <body>

<div class="contact-section">
  <p>Contact Us</p>
  
  <div class="border"></div>
  <?php
  include_once 'servicedata.php';
  ?>
  <form class="contact-form" action="contactus.php" method="post">
    <input type="text" name="name" id="name" class="contact-form-text" placeholder="Your name" required >
    <input type="email" name="email_id" id="email" class="contact-form-text" placeholder="Your email" required>
    <input type="text" name="phone" id="phone"class="contact-form-text" placeholder="Your phone" required>
    <textarea name="description" id="desc" class="contact-form-text" placeholder="Your message"></textarea>
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
