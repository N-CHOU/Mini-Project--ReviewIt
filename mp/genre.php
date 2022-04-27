<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genre</title>
    <link rel="stylesheet" href="genre.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<style>

    body{
        background-color: black;
    }
</style>
<body>
    <div class="container">
        <?php
        include_once '_nav.php';
        ?>
        <div class="row">
            <div class="col">
                <h1>Review It</h1>
                <p>Check out latest movie reviews, popular trends and participate in polls</p>
                <button type="button"><a href="Explorepage.php" style="color:white; text-decoration: none;">Explore</a> </button>
            </div>
            <div class="col">
                <a href="thriller.php">
                <div class="card card1">
                    <h4>Thriller</h4>
                    <p>Review some of the most exciting thrillers.</p>
                </div>
            </a>
            <a href="action.html">
                <div class="card card2">
                    <h4>Action</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </a>
            <a href="drama.html">
                <div class="card card3">
                    <h4>Drama</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div></a>
                <a href="#"><div class="card card4">
                    <h4>Others</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div></a>
            </div>
        </div>
        
        
        
    </div>




</body>
</html>