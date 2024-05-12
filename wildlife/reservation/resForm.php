<?php
   include '../includes/config.php';

   if(isset($_POST['reserveBtn'])){
      $f_name = $_POST['f_name'];
      $email = $_POST['email'];
      $date = $_POST['date'];
      $text = $_POST['text'];
      $tour_type = $_POST['tour_type'];
      $pakage_type = $_POST['pakage_type'];
      $count = $_POST['count_of_people'];

      $query = "INSERT INTO `reservation`(fullName, email, date, countOfPeople, message, pkgType, tourType) VALUES ('$f_name', '$email', '$date', '$count', '$text', '$pakage_type', '$tour_type')";

      $result = mysqli_query($connection, $query);
 
      if(!$result){
         echo "Data added faild!";
      }
      else{
         header('location: ../admin.php');
      }
   }
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
      <link rel="stylesheet" href="../src/style.css" />
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
      <section class="res padding-x center column w-100">
         <form method="POST" class="res-form center column g-2" style="margin-top:50px;">
            <!-- form-content -->
            <div class="form-container between g-5 w-100">
               <div class="left flex column g-3">
                  <!-- name -->
                  <div class="name flex column">
                     <label for="f_name">Full Name</label>
                     <input type="text" name="f_name"/>
                  </div>
                  <!-- count -->
                  <div class="count flex column">
                     <label for="count_of_people">Count of people</label>
                     <input type="number" name="count_of_people"/>
                  </div>
                  <!-- tour type -->
                  <div class="tour-type flex column g-1">
                     <label for="tour_type">Select Tour type</label>
                     <select name="tour_type">
                        <option value="bird">Bird watching</option>
                        <option value="wild">Wildlife</option>
                        <option value="tent">Tented safari camp</option>
                     </select>
                  </div>
               </div>
               <div class="right flex column g-3">
                  <!-- email -->
                  <div class="email flex column">
                     <label for="email">Email address</label>
                     <input type="email" name="email" />
                  </div>
                  <!-- date -->
                  <div class="date flex column">
                     <label for="date">Date for tour</label>
                     <input type="date" name="date" />
                  </div>
                  <!-- pkg type -->
                  <div class="pakage-type flex column g-1">
                     <label for="pakage_type">Selecte Pacakge Type</label>
                     <select name="pakage_type" id="">
                        <option value="basic">BASIC</option>
                        <option value="standard">STANDARD</option>
                        <option value="premium">PREMIUM</option>
                     </select>
                  </div>
               </div>
            </div>
            <!-- textarea -->
            <div class="flex column w-100 g-1">
               <label for="text">Enter Message</label>
               <textarea
                  name="text"
                  id="text"
                  cols="20"
                  rows="10"
                  class="w-100"
               ></textarea>
            </div>
            <!-- button -->
            <div class="w-100 center g-2">
               <input type="submit" name="reserveBtn" value="Add Reservetion" class="res-btn" />
            </div>


         </form>
      </section>
      <!-- JavaScript -->
      <script src="./src/main.js"></script>
   </body>
</html>
