<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: signin.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore</title>
    <link rel="stylesheet" href="Explorepage.css">
</head>

<body>

    <div class="header">
        <nav>
            <p class="hello">ReviewIt</p>
            <ul class="nav-links">
                <li><a href="genre.php">Genres</a></li>  
                <li><a href="trialreview.php">Reviews</a></li>
                <li><a href="contactus.php">Contact us</a></li>
                <li><a href="aboutus.php">About us</a></li>

                <!-- <li><a href="signup.html">Log in</a></li> -->
            </ul>
            <ul class="register-btn">
            <a href="profile1.php" class="register-btn-nav">Profile</a>
            <a href="logout.php" class="register-btn-nav">Logout</a>
        </ul>
        </nav>

        <div class="container">
            <h1>Best of Movie Reviews</h1>
            <div class="search-bar">
                <form action="searchdata.php" method="post">
                    <div class="name-input">
                        <label for="search">Title</label>
                        <input type="text" name="search" id="search" autocomplete="on" placeholder="Movie name">
                    </div>
                    <button type="submit"><img src="search.png" alt=""></button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <h2 class="sub-title">Latest releases</h2>
        <div class="latest-releases">

            <div class="movie-list-item">
                <img src="mulan.jpg" alt="" class="movie-list-item-image">
                <form action="reviewclickmulan.php" method="post">
                <!-- <input type="hidden"> -->
                <h3 class="movie-list-item-title" name="moviename">Mulan</h3>
                <button class="movie-list-item-button" type="submit">Read Reviews</button>
                </form>

</div>
            <div class="movie-list-item">
                <img src="moonlight.jpg" alt="" class="movie-list-item-image">

                <form action="reviewclickmoon.php" method="post">
                <!-- <input type="hidden"> -->
                <h3 class="movie-list-item-title" name="moviename">Moonlight</h3>
                <button class="movie-list-item-button" type="submit">Read Reviews</button>
                </form>

            </div>
            <div class="movie-list-item">
                <img src="antman.jpg" alt="" class="movie-list-item-image">
                <form action="reviewclickant.php" method="post">
                <!-- <input type="hidden"> -->
                <h3 class="movie-list-item-title" name="moviename">Ant Man</h3>
                <button class="movie-list-item-button" type="submit">Read Reviews</button>
                </form>

            </div>
            <div class="movie-list-item">
                <img src="BohemianRhapsody.png" alt="" class="movie-list-item-image">

                <form action="reviewclickboh.php" method="post">
                <!-- <input type="hidden"> -->
                <h3 class="movie-list-item-title" name="moviename">Bohemian Rhapsody</h3>
                <button class="movie-list-item-button" type="submit">Read Reviews</button>
                </form>

            </div>
            <div class="movie-list-item">
                <img src="jaws.jpg" alt="" class="movie-list-item-image">

               <form action="reviewclickjaws.php" method="post">
                <!-- <input type="hidden"> -->
                <h3 class="movie-list-item-title" name="moviename">Jaws</h3>
                <button class="movie-list-item-button" type="submit">Read Reviews</button>
                </form>

            </div>
        </div>

        <br>
        <br>
        <br>

        <h1 style="color: blanchedalmond;">Discover the best of English movies reviewed by other cinema connoisseurs</h1>
        

        <section class="slider-section">
            <div class="slider">
                <div class="slides">
                    <!--radio buttons start-->
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <!--radio buttons end-->
                    <!--slide images start-->
                    <div class="slide first">
                        <img src="BohemianRhapsody.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="sherlock.png" alt="">
                    </div>
                    <div class="slide">
                        <img src="Maleficent.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="oblivion.jpg" alt="">
                    </div>
                    <!--slide images end-->
                    <!--automatic navigation start-->
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                    </div>
                    <!--automatic navigation end-->
                </div>
                <!--manual navigation start-->
                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>
                <!--manual navigation end-->

            </div>
        </section>

        <section class="spinnywheel">
            <div class="spin-wheel">
                <span class="arrow"></span>
                <div class="spin-container">
                   <a href="https://www.youtube.com/watch?v=KK8FHdFluOQ"> <div class="one">1</div></a>
                   <a href="https://www.youtube.com/watch?v=P2KRKxAb2ek"> <div class="two">2</div></a>
                   <a href="https://www.youtube.com/watch?v=P2KRKxAb2ek"> <div class="three">3</div></a>
                   <a href="https://www.youtube.com/watch?v=UffVhIixpLA"> <div class="four">4</div></a>
                   <a href="https://www.youtube.com/watch?v=N73oTiIIJe0"> <div class="five">5</div></a>
                   <a href="https://www.youtube.com/watch?v=XcCWBRqWmyw"> <div class="six">6</div></a>
                   <a href="https://www.youtube.com/watch?v=U1fu_sA7XhE"> <div class="seven">7</div></a>
                   <a href="https://www.youtube.com/watch?v=iqxcjD-eAsg"> <div class="eight">8</div></a>
                </div>
                <button id="spin">Spin</button>
            </div>
            <div class="spin-text">
            <div class="spin-text-header1" style="color: blanchedalmond;">ReviewNext</div><br>
            <div class="spin-text-inside" >Spin the wheel to discover a new movie to watch and review.</div>
        </div>
        </section>




        <h2 class="sub-title">Popular Reviews</h2>
        <div class="trending">
            <div >
                <img src="BohemianRhapsody.png" alt="">
                <p style="color: white;">A touching glimpse of the life of very sensitive and passionate 
                    young man who aspires and inspires the incredible 'Queen'  and impart 
                    finds himself in Freddie Mercury . A unique and gifted and unforgettable 
                    soulfelt singer and performer . One of the greatest of all time .</p>
                    <button class="movie-list-item-button">Read Reviews</button>
            </div>


            <div>
                <img src="BobBiswas.jpg" alt="">
                <p style="color: white;">I saw Bob Biswas when it released on OTT last Friday, 
                    and found it average, it was a largely entertaining small thriller/crime 
                    caper set in the underbelly of Kolkata. Few scenes and elements were going 
                    on in the head and I decided to rewatch it last night. And this time, I was 
                    able to appreciate the nuances, the world building, the characters, the 
                    small-town-noir elements a bit more. </p>
                    <button class="movie-list-item-button">Read Reviews</button>
            </div>


            <div>
                <img src="jjk.jpg" alt="">
                <p style="color: white;">Can't be said enough about this manga. This book portrayed Okkutusu Yutta's character brilliantly and everyone will be impressed by him in the upcoming movie Jujutsu Kaisen 0 Movie.

                    The techniques, the character designs and the fight scenes were well drawn by the mangaka. This manga deserves to be read more.</p>
                <button class="movie-list-item-button">Read Reviews</button>
            </div>


            <div>
                <img src="mulan.jpg" alt="">
                <p style="color: white;">2020 was a year full of difficult moments, 
                    none of these painful moments, however were as agonizing as the 
                    90-minutes that one has to endure to get to the roll of credits 
                    of this sad-sad reboot of what otherwise would have been remembered 
                    as a Disney all-time favourite. 
                </p>
                    <button class="movie-list-item-button">Read Reviews</button>
            </div>

        </div>



    </div>



</body>
<script type="text/javascript">
    var counter = 1;
    setInterval(function () {
        document.getElementById('radio' + counter).checked = true;
        counter++;
        if (counter > 4) {
            counter = 1;
        }
    }, 5000);

    function myfunction() {
        var x = 1024;
        var y = 9999;
        var deg = Math.floor(Math.random() * (x - y)) + y;
        document.getElementById('box').style.transform = "rotate(" + deg + "deg)";

        var element = document.getElementById('mainbox');
        element.classList.remove('animate');
        setTimeout(function () {
            element.classList.add('animate');
            var valueList = ["10", "20", "50", "100", "150", "200", "400", "500",];
            var getValue = valueList[Math.floor(Math.random() * valueList.length)];
            // alert(getValue); 
        }, 5000);
    }

    let container = document.querySelector(".spin-container");
    let btn = document.getElementById("spin");
    let number = Math.ceil(Math.random() * 1000);

    btn.onclick = function () {
        container.style.transform = "rotate(" + number + "deg)";
        number += Math.ceil(Math.random() * 1000);
    }


</script>

</html>