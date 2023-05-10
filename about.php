<?php 

include 'components/ConnexionBD.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
} 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/final.css">


</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

    <div class="row">
        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>
        <div class="content">
            <h3>why choose us? <br><h2>We strive to provide the best experience possible for our users and greatly appreciate all feedback, positive or negative.</h2></h3>
            <a href="contact.php" class="inline-btn">contact us</a>
        </div>
    </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

    <h1 class="heading">3 simple steps</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/step-1.png" alt="">
            <h3>search property</h3>
        </div>

        <div class="box">
            <img src="images/step-2.png" alt="">
            <h3>contact agents</h3>
        </div>

        <div class="box">
            <img src="images/step-3.png" alt="">
            <h3>enjoy property</h3>
        </div>

    </div>

</section>

<!-- steps section ends -->

<!-- review section starts  -->

<section class="reviews">

    <h1 class="heading">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <div class="user">
                <img src="images/pic-1.png" alt="">
                <div>
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <p>I recently used this website to book a vacation rental and was extremely satisfied with the entire process. The user interface is very intuitive and easy to navigate, and the selection of properties is vast. The booking process was seamless and I appreciated the detailed information provided about each property. I will definitely use this website again in the future.</p>
        </div>

        <div class="box">
            <div class="user">
                <img src="images/pic-2.png" alt="">
                <div>
                    <h3>Asma elhadj</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <p>I had to cancel a booking on this website due to unforeseen circumstances and was pleasantly surprised by how easy and hassle-free the cancellation process was. The customer service team was very responsive and understanding, and I received a prompt refund. I highly recommend this website for anyone looking for a reliable and user-friendly platform for booking real estate properties.</p>
        </div>

        <div class="box">
            <div class="user">
                <img src="images/pic-3.png" alt="">
                <div>
                    <h3>johnny depp</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <p>I was able to find my dream home on this website thanks to the extensive listings and powerful search tools. The website also provides helpful information about the neighborhoods and amenities in the area, which was very useful in making my decision. Overall, I had a great experience using this website and would highly recommend it to anyone in the market for real estate.</p>
        </div>

        <div class="box">
            <div class="user">
                <img src="images/pic-4.png" alt="">
                <div>
                    <h3>olfa medimegh</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <p>I have used this website to book several business trips and have always been impressed with the selection of properties and the competitive prices. The website is very easy to use and I appreciate the ability to filter my search results based on my specific needs. I have recommended this website to colleagues and will continue to do so.</p>
        </div>

        <div class="box">
            <div class="user">
                <img src="images/pic-5.png" alt="">
                <div>
                    <h3>hamza balloumi</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <p>As a first-time homebuyer, I found the process of finding and purchasing a home to be daunting. However, this website provided me with all the resources I needed to feel confident in my decision. The listings were accurate and detailed, and the mortgage calculator was a helpful tool in determining my budget. I would highly recommend this website to anyone in the market for real estate.</p>
        </div>

        <div class="box">
            <div class="user">
                <img src="images/pic-6.png" alt="">
                <div>
                    <h3>walae ali</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <p>I recently listed my property on this website and was very impressed with the level of exposure it received. Within a few days of listing, I received several inquiries and ultimately sold my property quickly and for a great price. The website's user interface for sellers is also very intuitive and easy to use. I would definitely use this website again in the future.</p>
        </div>

</section>

<!-- review section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>