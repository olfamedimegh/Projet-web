<!-- php  

include 'components/ConnectionBD.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

include 'components/save_send.php';

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>

     <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">


</head>
<body>
    
<?php include 'components/user_header.php'; ?>

    <!-- search filter section starts -->
    
<section class="filters" style="padding-bottom: 0;">

<form action="" method="post">
   <div id="close-filter"><i class="fas fa-times"></i></div>
   <h3>filter your search</h3>
      
      <div class="flex">
         <div class="box">
            <p>Enter location</p>
            <input type="text" name="location" required maxlength="100" placeholder="Enter city name" class="input">
         </div>
         <div class="box">
            <p>Offer type</p>
            <select name="offer" class="input" required>
               <option value="sale">sale</option>
               <option value="rent">rent</option>
            </select>
         </div>
         <div class="box">
            <p>Property Type</p>
            <select name="type" class="input" required>
               <option value="flat">flat</option>
               <option value="house">house</option>
               <option value="shop">shop</option>
            </select>
         </div>
         <div class="box">
            <p>how many BHK</p>
            <select name="bhk" class="input" required>
               <option value="1">1 BHK</option>
               <option value="2">2 BHK</option>
               <option value="3">3 BHK</option>
               <option value="4">4 BHK</option>
               <option value="5">5 BHK</option>
               <option value="6">6 BHK</option>
               <option value="7">7 BHK</option>
               <option value="8">8 BHK</option>
               <option value="9">9 BHK</option>
            </select>
         </div>
         <div class="box">
            <p>Min Price DT</p>
            <select name="min" class="input" required>
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
            <p>Max Price DT</p>
            <select name="max" class="input" required>
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
            <p>status</p>
            <select name="status" class="input" required>
               <option value="ready to move">ready to move</option>
               <option value="under construction">under construction</option>
            </select>
         </div>
         <div class="box">
            <p>furnished</p>
            <select name="furnished" class="input" required>
               <option value="unfurnished">unfurnished</option>
               <option value="furnished">furnished</option>
               <option value="semi-furnished">semi-furnished</option>
            </select>
         </div>
      </div>
      <input type="submit" value="search property" name="filter_search" class="btn">
</form>

</section>

    <!-- search filter section ends -->
     <!-- partie php -->

     <!-- listings section starts  -->


</body>
</html>