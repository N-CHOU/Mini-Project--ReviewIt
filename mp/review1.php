<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="file:///C:/fontawesome-free-5.13.0-web/css/all.css">
	<link rel="stylesheet" type="text/css" href="moviereviews.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
		integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css"
		integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

	<title>Trying review page</title>
	<style>
		.rate-box{
			justify-content: center;
			text-align: center;
			margin: auto;
  width: 50%;
 
  padding: 10px;
		}
	</style>
</head>

<body>
<?php
include_once 'config.php';
$sql = "SELECT rating FROM review_table";
$result= mysqli_query($conn,$sql);
?>	
	<section id="review">
		<div class="heading">More Reviews</div>
		<div>
		Ratings:
  <select name="movie_ratings" id="movie_ratings">
    <!-- <option value="value5">1</option>
    <option value="value5">2</option>
    <option value="value5">3</option>
    <option value="value5">4</option>
	<option value="value5">5</option> -->
  </select>
  <!-- <input type="submit" value="Submit"> -->
  </div>
		
					
	</section>








</body>



</html>