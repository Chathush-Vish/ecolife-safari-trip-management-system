<?php
include("includes/config.php");
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <!-- title -->
      <title>EcoLife - Wildlife safari trip management system</title>
      <!-- icon -->
      <link
         rel="shortcut icon"
         href="./images/logo-icon.png"
         type="image/x-icon"
      />
      <!-- Custom css -->
      <link rel="stylesheet" href="./src/style.css" />
      <!-- Poppins font -->
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link
         href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
         rel="stylesheet"
      />
      <!-- montocarlo font -->
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link
         href="https://fonts.googleapis.com/css2?family=Charm:wght@400;700&display=swap"
         rel="stylesheet"
      />
   </head>
   <body>
      <!-- header -->
      <?php include './includes/header.php' ;?>

      <!-- hero -->
      <section class="hero w-100 center column g-2">
         <h1>
            Wildlife Tours in <span>Sri Lanka</span> By Local Wildlife
            Specialits
         </h1>
         <a href="./tours.php">
            <button class="book-btn">Reserve Tour</button>
         </a>
      </section>
      <!-- End of hero -->

      <!-- features -->
      <section class="features w-100 between">
         <div class="column center">
            <img src="./images/features/f1.png" alt="" width="150px" />
            <p>Easy Reservation</p>
         </div>
         <div class="column center">
            <img src="./images/features/f2.png" alt="" width="150px" />
            <p>24 Hours service</p>
         </div>
         <div class="column center">
            <img src="./images/features/f3.png" alt="" width="150px" />
            <p>Easy payment method</p>
         </div>
         <div class="column center">
            <img src="./images/features/f4.png" alt="" width="150px" />
            <p>Happy Customers</p>
         </div>
         <div class="column center">
            <img src="./images/features/f5.png" alt="" width="150px" />
            <p>Experience Staff</p>
         </div>
         <div class="column center">
            <img src="./images/features/f6.png" alt="" width="150px" />
            <p>Online Support</p>
         </div>
      </section>
      <!-- End of features -->

      <!-- poster -->
      <section class="poster center w-100 column padding-y padeding-x">
         <div class="title center column">
            <h2>Sri Lanka, The Best Wildlife Destination</h2>
            <p>Eco Life Wildlife tours</p>
         </div>
         <div class="container flex center w-100 padding-x g-3">
            <a href="#" class="img-container">
               <img src="./images/poster-1.jpg" alt="" />
            </a>
            <a href="#" class="img-container">
               <img src="./images/poster-2.jpg" alt="" />
            </a>
            <a href="#" class="img-container">
               <img src="./images/poster-3.jpg" alt="" />
            </a>
         </div>
         <div class="w-100 center">
            <button class="see-more-btn" style="margin-bottom:50px;">
               <a href="#" class="center g-1">
                  <a href="./wildinfo.php">View Wild Info</a>
                  <svg
                     xmlns="http://www.w3.org/2000/svg"
                     width="18"
                     height="18"
                     fill="currentColor"
                     class="bi bi-arrow-right-short"
                     viewBox="0 0 16 16"
                  >
                     <path
                        fill-rule="evenodd"
                        d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8"
                     />
                  </svg>
               </a>
            </button>
         </div>
      </section>
      <!-- End of poster -->

      <!-- Announce -->
      <section class="announce center column g-2">
         <h3>
            Sri Lankan Safari | A local special interest travel company
            specialised for Wildlife and Bird Watching Tours
         </h3>
      </section>
      <!-- End of Announce -->

      <!-- info -->
      <section class="info flex column">
         <div class="info-content center w-100c">
            <div class="w-50 center">
               <img src="./images/bird.jpg" width="100%" alt="" />
            </div>
            <div class="w-50 flex column g-2 icnc">
               <h1>Sri Lanka, birder's Paradise</h1>
               <p>
                  This little island is a birders paradise too! It is home to
                  439 species of birds of which 33 are endemic with 68 endemic
                  sub species, 236 are breeding residents, 203 are migrants and
                  the rest vagrants along with hundreds of birding sites that
                  makes it easy to observe these feathered beauties in their
                  natural habitats, no matter in which part of the country you
                  <a href="#"> Click to read more about Birds of Sri Lanka. </a>
               </p>
            </div>
         </div>
         <div class="info-content center w-100">
            <div class="w-50 flex column g-2 icc">
               <h1>Plethora of Fauna and Flora</h1>
               <p>
                  There are close to sixty National Parks and Reserves situated
                  all over Sri Lanka, some of them UNESCO World Heritage Sites
                  because of their high biodiversity, Still more the Sinharaja
                  Rain Forest, a Main and Biosphere Forest Reserve believed to
                  be one of the finest tropical ecosystems in the whole of Asia
                  is teeming with endemism; close to 140 endemic trees, 20
                  endemic species of birds, with over 50 percentage endemism
                  amongst butterflies, fish, amphibians, and reptiles;
               </p>
            </div>
            <div class="w-50 center">
               <img src="./images/monkey.jpg" width="100%" alt="" />
            </div>
         </div>
         <div class="info-content center w-100">
            <div class="w-50 center">
               <img src="./images/jungle.jpg" width="100%" alt="" />
            </div>
            <div class="w-50 flex column g-2 icnc">
               <h1>A rich biodiversity</h1>
               <p>
                  The biological diversity in this little island, Sri Lanka has
                  an unbelievable proportion of endemism for both flora and
                  fauna; to be more specific 23% of flora and 16% of fauna are
                  endemic to the country.
                  <a href="#"> Click to read more about Birds of Sri Lanka. </a>
               </p>
            </div>
         </div>
      </section>
      <!-- End of info -->

      <!-- popular packages -->
      <section class="pkg-pop">
         <div class="title center column w-100">
            <h1>Packages Details</h1>
            <p>Choose tour type you want</p>
         </div>
         <div class="w-100 between pkg-pop-container g-3">
            <div class="pkg-card between-y g-4">
               <h3>Bird Watching</h3>
               <ul class="flex column g-2">
                  <li class="flex g-2">
                     <img
                        src="./images/svg/check-circle-fill.png"
                        alt=""
                        width="10px"
                     />
                     <p>1 - 3 Day Trip</p>
                  </li>
                  <li class="flex g-2">
                     <img src="./images/svg/check-circle-fill.png" alt="" />
                     <p>Experienced Guid</p>
                  </li>
                  <li class="flex g-2">
                     <img src="./images/svg/check-circle-fill.png" alt="" />
                     <p>Best saffari cabs</p>
                  </li>
                  <li class="flex g-2">
                     <img src="./images/svg/check-circle-fill.png" alt="" />
                     <p>Cover wide area</p>
                  </li>
                  <li class="flex g-2">
                     <img src="./images/svg/check-circle-fill.png" alt="" />
                     <p>Excellent destinations</p>
                  </li>
               </ul>
               <a href="./tours.php"><button class="pkg-btn">See More</button></a>
            </div>
            <div class="pkg-card pkg-card-mid between-y g-4">
               <h3>Wild Animal Watching</h3>
               <ul class="flex column g-2">
                  <li class="flex g-2">
                     <img
                        src="./images/svg/check-circle-fill-white.png"
                        alt=""
                        width="10px"
                     />
                     <p>1 - 7 Day Trip</p>
                  </li>
                  <li class="flex g-2">
                     <img
                        src="./images/svg/check-circle-fill-white.png"
                        alt=""
                     />
                     <p>Experienced Guid</p>
                  </li>
                  <li class="flex g-2">
                     <img
                        src="./images/svg/check-circle-fill-white.png"
                        alt=""
                     />
                     <p>Best saffari cabs</p>
                  </li>
                  <li class="flex g-2">
                     <img
                        src="./images/svg/check-circle-fill-white.png"
                        alt=""
                     />
                     <p>Cover wide area</p>
                  </li>
                  <li class="flex g-2">
                     <img
                        src="./images/svg/check-circle-fill-white.png"
                        alt=""
                     />
                     <p>Free Photographer</p>
                  </li>
               </ul>
               <a href="./tours.php"><button class="pkg-btn">See More</button></a>
            </div>
            <div class="pkg-card between-y column g-4">
               <h3>Tented safari camp</h3>
               <ul class="flex column g-2">
                  <li class="flex g-2">
                     <img
                        src="./images/svg/check-circle-fill.png"
                        alt=""
                        width="10px"
                     />
                     <p>2 - 7 Day Trip</p>
                  </li>
                  <li class="flex g-2">
                     <img src="./images/svg/check-circle-fill.png" alt="" />
                     <p>Experienced Guid</p>
                  </li>
                  <li class="flex g-2">
                     <img src="./images/svg/check-circle-fill.png" alt="" />
                     <p>Best saffari cabs</p>
                  </li>
                  <li class="flex g-2">
                     <img src="./images/svg/check-circle-fill.png" alt="" />
                     <p>Cover wide area</p>
                  </li>
                  <li class="flex g-2">
                     <img src="./images/svg/check-circle-fill.png" alt="" />
                     <p>Free camping facilities</p>
                  </li>
               </ul>
               <a href="./tours.php"><button class="pkg-btn">See More</button></a>
            </div>
         </div>
      </section>
      <!-- End of popular packages -->

      <!-- testimonials -->
      <section class="testimonials padding-x marging-y">
         <div class="title w-100 center column">
            <h1>Testimonials</h1>
            <p>What Clients think about us</p>
         </div>
         <div class="testi-container between g-5">
            <div class="testi flex column g-3">
               <div class="head flex g-5">
                  <img src="./images/p-2.jpg" width="80px" alt="" />
                  <div>
                     <h4>David Richardson</h4>
                     <small>Civil Engineer</small>
                  </div>
               </div>
               <p>
                  "Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Commodi, deleniti."
               </p>
            </div>
            <div class="testi flex column g-3">
               <div class="head flex g-5">
                  <img src="./images/p-4.jpg" width="80px" alt="" />
                  <div>
                     <h4>Jhon Marston</h4>
                     <small>Photographer</small>
                  </div>
               </div>
               <p>
                  "Ipsum dolor sit ametLorem ipsum dolor sit amet consectetur
                  adipisicing elit. Commodi, deleniti."
               </p>
            </div>
         </div>
      </section>
      <!-- End of testimonials -->

      <!-- Contact -->
      <section class="contact center w-100">
         <div class="contact-container center column g-3">
            <h1>START YOUR JOURNEY</h1>
            <p>
               Instead of sifting through countless websites, guidebooks or post
               from your friends on social media, you deserve a hassle-free
               vacation planned by a professional, saving your valuable time.
            </p>
            <button class="main-btn"><a href="./contact.php" style="color:#fff;">Contact</a></button>
         </div>
         <img src="./images/1.jpg" id="bg-1" alt="" />
      </section>
      <!-- End of Contact -->

      <!-- footer -->
      <?php include './includes/footer.php' ;?>
     
      <!-- JavaScript -->
      <script src="./src/main.js"></script>
      <script src="./src/navbar.js"></script>
      <script src="../src/loading.js"></script>
   </body>
</html>


<?php

if (isset($_SESSION['alreadyLogged'])) {
   $_SESSION['alreadyLogged'] = 0;
   callNotificationPhp("Logged in as " . $_SESSION["fName"] . " " . $_SESSION["lName"]);
} else {
   echo "
   <script>
       document.getElementById('notification-main-container').style.display = 'none';
   </script>";
}