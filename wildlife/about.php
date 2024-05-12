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
      <link rel="stylesheet" href="./src/about.css" />
      
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
      <!-- Include navigation bar -->
      <?php include './includes/header.php' ?>

      <!-- hero -->
      <section class="about-hero">
         <h1>About Us</h1>
      </section>

      <!-- text -->
      <section class="about-info">
         <div class="about-info-content">
            <div class="">
               <img src="./images/hero-1.jpg" width="100%" alt="" />
            </div>
            <div class=" icnc">
               <h1>Our Experienced Staff</h1>
               <p>
               Our team of experienced staff is the heart and soul of our wildlife tour company. With a deep passion for nature and wildlife, our guides and naturalists bring years of expertise and knowledge to every safari adventure. From identifying elusive wildlife to sharing fascinating insights about ecosystems, our staff ensures that every moment of your journey is enriching and memorable. Their dedication to creating personalized experiences and their commitment to conservation make them invaluable partners in our mission to provide exceptional wildlife tours. Rest assured, you're in capable hands with our experienced staff, ready to guide you through the wonders of the natural world.
               </p>
            </div>
         </div>
         <div class="about-info-content">
            <div class="icc">
               <h1>Best Wildlife Tour Company</h1>
               <p>
               Embark on an unforgettable wildlife safari adventure with our premier tour company. Our expertly crafted itineraries cater to every type of adventurer, ensuring a perfect blend of excitement and relaxation. Immerse yourself in luxurious accommodations that offer breathtaking views and a deep connection to nature. Our knowledgeable guides and naturalists are passionate about wildlife, providing you with insightful and engaging experiences throughout your journey. With a focus on personalized adventures and responsible tourism, we are committed to preserving the natural world for future generations. Let us take care of the details while you enjoy a seamless and exceptional safari experience. Choose the best wildlife tour company and get ready to discover nature's wonders like never before.
               </p>
            </div>
            <div class="">
               <img src="./images/info-2.jpg" width="100%" alt="" />
            </div>
         </div>
      </section>

      <!-- team card -->
      <section class="team">
            <div class="title"><h1>Meet Our Team</h1></div>
            <div class="team-container">
               <div class="card">
                  <img src="./images/p-2.jpg" alt="">
                  <div class="det">
                     <h4>Richard Andercen</h4>
                     <small>Manager</small>
                     <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, atque!"</p>
                  </div>
               </div>
               <div class="card">
                  <img src="./images/pp.jpg" alt="">
                  <div class="det">
                     <h4>Jhon Mastorn</h4>
                     <small>Founder & CEO</small>
                     <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, atque!"</p>
                  </div>
               </div>
               <div class="card">
                  <img src="./images/p-4.jpg" alt="">
                  <div class="det">
                     <h4>Anand Kavish</h4>
                      <small>Staff Member</small>
                     <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, atque!"</p>
                  </div>
               </div>
            </div>
      </section>

      <!-- Contact -->
      <section class="contact">
         <div class="contact-container">
            <h1>START YOUR JOURNEY</h1>
            <p>
               Instead of sifting through countless websites, guidebooks or post
               from your friends on social media, you deserve a hassle-free
               vacation planned by a professional, saving your valuable time.
            </p>
            <button class="main-btn"><a href="./contact.php" style="color:#fff;">Contact</a></button>
         </div>
      </section>
      <!-- End of Contact -->

      <!-- Include Footer -->
      <?php include './includes/footer.php' ?>
   </body>
</html>