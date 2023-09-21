<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>

    <!-- Swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!-- Font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- header section start -->
    <section class="header">
        <a href="index.php" class="logo">travel.</a>
        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

        </div>
    </section>

    <!-- header section end -->

    <div class="heading" style="background: url(images/book-now.png) no-repeat">
        <h1>book now </h1>
    </div>

    <!-- booking section start -->

    <section class="booking">
        <h1 class="heading-title">book your trip!</h1>

        <form action="book_form.php" method="post" class="book-form">

            <div class="flex">
                <div class="inputBox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>
                <div class="inputBox">
                    <span>phone :</span>
                    <input type="number" placeholder="enter your number" name="phone">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>
                <div class="inputBox">
                    <span>where to :</span>
                    <input type="text" placeholder="place you want to visit" name="location">
                </div>

                <div class="inputBox">
                    <span>how many :</span>
                    <input type="number" placeholder="numbers of  guests" name="guests">
                </div>
                <div class="inputBox">
                    <span>arrival :</span>
                    <input type="date" name="arrival">
                </div>

                <div class="inputBox">
                    <span>leaving :</span>
                    <input type="date" name="leaving">
                </div>

            </div>
            <input type="submit" value="submit" class="btn" name="send">

        </form>

    </section>

    <!-- booking section end -->








    <!-- Footer section   start-->

    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3> quick links </h3>
                <a href="index.php"> <i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
                <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>

            </div>

            <div class="box">
                <h3> extra links </h3>
                <a href="#"> <i class="fas fa-angle-right"></i> ask questions </a>
                <a href="#"> <i class="fas fa-angle-right"></i> about us </a>
                <a href="#"> <i class="fas fa-angle-right"></i> privacy policy </a>
                <a href="#"> <i class="fas fa-angle-right"></i> terms of use </a>
            </div>

            <div class="box">
                <h3>contact info </h3>
                <a href="#"> <i class="fas fa-phone"></i> +91 123-456-789 </a>
                <a href="#"> <i class="fas fa-phone"></i> +91 917-456-789 </a>
                <a href="#"> <i class="fas fa-envelope"></i> pradyumnakumarnaik1@gmail.com </a>
                <a href="#"> <i class="fas fa-map"></i> Bhawanipatna, Odisha, India </a>
            </div>


            <div class="box">
                <h3>follow us </h3>
                <a href="https://www.facebook.com/profile.php?id=100035573633791" target="_blank"> <i class="fab fa-facebook-f"></i> facebook</a>
                <a href="https://www.instagram.com/im_siddharth_20/" target="_blank"> <i class="fab fa-instagram"></i> instagram</a>
                <a href="https://www.linkedin.com/in/pradyumna-kumar-naik-9398b723a/" target="_blank"> <i class="fab fa-linkedin"></i> linkedin</a>
                <a href="https://github.com/Pradyumna-1" target="_blank"> <i class="fab fa-github"></i> github</a>
            </div>


        </div>

        <div class="credit"> created by <span>mr. Pradyumna </span> | all rights reserved !</div>
    </section>
    <!-- Footer section end  -->

    <!-- swiper js link  -->

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <!-- custome js file links -->
    <script src="script.js"></script>
</body>

</html>