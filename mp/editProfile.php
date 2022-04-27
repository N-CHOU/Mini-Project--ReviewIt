<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="file:///C:/fontawesome-free-5.13.0-web/css/all.css">
	<link rel="stylesheet" type="text/css" href="contactus.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
		integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

</head>
<body>

   
 
    
    <div align='center'>
        <div class="row">
            <div class="col-md-6 offset-3">
                <br><b><br></b>
                <form action="UpdateProcess.php" method="POST" enctype="multipart/form-data" >
                <div class="form-group">
                        <input type="text" name="updateUsername" placeholder="Enter text here" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="bio" placeholder="Enter text here" class="form-control">
                    </div>
                    <!-- <div class="form-group">
                        <input type="email" name="email_id" class="form-control" value="" placeholder="Email">
                    </div> -->

                    <div class="form-group">
                        <input type="file" name="userImage" class="form-control" value="" placeholder="filename">
                    </div>

                    <div class="form-group">
                        <input type="submit" name="update" class="btn btn-info" value="Update">
                    </div>
                </form>
            </div>
        </div>

    </div>
   
</body>
</html>