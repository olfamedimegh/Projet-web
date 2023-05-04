<!-- php  

include 'components/ConnexionBD.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
} -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="stylesheet" href="css/style_home.css">

</head>
<body>
    

<!--header  --> 

<?php include 'components/user_header.php' ?>


<!-- home section -->

<div class="home">
<!-- search box-->
<section class="center">

   <form action="search.php" method="post">
      <h3>find your perfect home</h3>
      <div class="box">
         <p>Enter location <span>*</span></p>
         <input type="text" name="h_location" required maxlength="100" placeholder="Enter city name" class="input">
      </div>
      <div class="flex">
         <div class="box">
            <p>Property Type <span>*</span></p>
            <select name="h_type" class="input" required>
               <option value="flat">flat</option>
               <option value="house">house</option>
               <option value="shop">shop</option>
            </select>
         </div>
         <div class="box">
            <p>Offer type <span>*</span></p>
            <select name="h_offer" class="input" required>
               <option value="sale">sale</option>
               <option value="rent">rent</option>
            </select>
         </div>
         <div class="box">
            <p>Min Price DT <span>*</span></p>
            <select name="h_min" class="input" required>
               <option value="100">100</option>
               <option value="250">250</option>
               <option value="500">500</option>
               <option value="1000">1000</option>
               <option value="3000">3000</option>
               <option value="5000">5000</option>
               <option value="10000">10 milion</option>
               <option value="20000">20 milion</option>
               <option value="30000">30 milion</option>
               <option value="40000">40 milion</option>
               <option value="50000">50 milion</option>
               <option value="60000">60 milion</option>
               <option value="70000">70 milion</option>
               <option value="80000">80 milion</option>
               <option value="90000">90 milion</option>
               <option value="100000">100 milion </option>
               <option value="200000">200 milion</option>
               <option value="300000">300 milion</option>
               <option value="400000">400 milion</option>
               <option value="500000">500 milion</option>
               <option value="600000">600 milion</option>
               <option value="700000">700 milion</option>
               <option value="800000">800 milion</option>
               <option value="900000">900 milion</option>
               <option value="1000000">1 bilion</option>
            </select>
         </div>
         <div class="box">
            <p>Max Price DT <span>*</span></p>
            <select name="h_max" class="input" required>
            <option value="100">100</option>
               <option value="250">250</option>
               <option value="500">500</option>
               <option value="1000">1000</option>
               <option value="3000">3000</option>
               <option value="5000">5000</option>
               <option value="10000">10 milion</option>
               <option value="20000">20 milion</option>
               <option value="30000">30 milion</option>
               <option value="40000">40 milion</option>
               <option value="50000">50 milion</option>
               <option value="60000">60 milion</option>
               <option value="70000">70 milion</option>
               <option value="80000">80 milion</option>
               <option value="90000">90 milion</option>
               <option value="100000">100 milion </option>
               <option value="200000">200 milion</option>
               <option value="300000">300 milion</option>
               <option value="400000">400 milion</option>
               <option value="500000">500 milion</option>
               <option value="600000">600 milion</option>
               <option value="700000">700 milion</option>
               <option value="800000">800 milion</option>
               <option value="900000">900 milion</option>
               <option value="1000000">1 bilion</option>
            </select>
         </div>
      </div>
      <input type="submit" value="search property" name="h_search" class="btn">
   </form>

</section>
</div>


<!-- services section  -->

<section class="services">

<h1 class="heading">our services</h1>

<div class="box-container">

   <div class="box">
      <img src="images/icon-1.png" alt="">
      <h3>buy house</h3>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
   </div>

   <div class="box">
      <img src="images/icon-2.png" alt="">
      <h3>rent house</h3>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
   </div>

   <div class="box">
      <img src="images/icon-3.png" alt="">
      <h3>sell house</h3>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
   </div>

   <div class="box">
      <img src="images/icon-4.png" alt="">
      <h3>flats and buildings</h3>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
   </div>

   <div class="box">
      <img src="images/icon-5.png" alt="">
      <h3>shops and malls</h3>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
   </div>

   <div class="box">
      <img src="images/icon-6.png" alt="">
      <h3>24/7 service</h3>
      <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque, incidunt.</p>
   </div>

</div>

</section>

<!-- listings section starts  -->

<section class="listings">

<h1 class="heading">latest listings</h1>
<div class="box-container">
</div>

</section>

<!-- alert cdn link-->

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- footer section  -->
<?php include 'components/footer.php'; ?>


<!-- js file link-->
<script src ="js/script.js"></script>

<?php include 'components/message.php' ?>

</body>



</html>