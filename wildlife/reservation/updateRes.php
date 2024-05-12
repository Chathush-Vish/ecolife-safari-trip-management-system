<?php include '../includes/config.php';?>

<!-- display values in form -->
<?php
   if(isset($_GET['resId'])){
      $resId = $_GET['resId'];

      $query = "SELECT * FROM `reservation` WHERE `resId` = '$resId'";
      $result = mysqli_query($connection,$query);

      if($result){
         $row = mysqli_fetch_assoc($result);
      }
      else{
         echo '404 Error';
      }
   }
?>
<?php
   if(isset($_POST['updateBtn'])){
      $f_name = $_POST['f_name'];
      $email = $_POST['email'];
      $date = $_POST['date'];
      $text = $_POST['text'];
      $tour_type = $_POST['tour_type'];
      $pakage_type = $_POST['pakage_type'];
      $count = $_POST['count_of_people'];
      $reqType = $_POST['reqType'];

      $query = "UPDATE `reservation` SET 
                           `fullName` = '$f_name',
                           `email` = '$email',
                           `date` = '$date',
                           `message` = '$text',
                           `tourType` = '$tour_type',
                           `pkgType` = '$pakage_type',
                           `countOfPeople` = '$count',
                           `status` = '$reqType'
                           WHERE `resId` = '$resId'
                        ";

      $result1 = mysqli_query($connection, $query);

      if(!$result1){
         echo "update error";
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
      <section class="res padding-x center column w-100" style="margin-top:-20px;">
         <form method="POST" class="res-form center column g-2" style="margin-top:50px;" action="./updateRes.php?resId=<?php echo $resId; ?>">
            <!-- form-content -->
            <div class="form-container between g-5 w-100">
               <div class="left flex column g-3">
                  <!-- name -->
                  <div class="name flex column">
                     <label for="f_name">Full Name</label>
                     <input type="text" name="f_name" value="<?php echo $row['fullName'] ?>"/>
                  </div>
                  <!-- count -->
                  <div class="count flex column">
                     <label for="count_of_people">Count of people</label>
                     <input type="number" name="count_of_people" value="<?php echo $row['countOfPeople'] ?>"/>
                  </div>
                  <!-- tour type -->
                  <div class="tour-type flex column g-1">
                     <label for="tour_type">Select Tour type</label>
                     <select name="tour_type" >
                        <option value="bird" <?php if ($row['tourType'] === 'bird') echo 'selected'; ?>>Bird watching</option>
                        <option value="wild" <?php if ($row['tourType'] === 'wild') echo 'selected'; ?>>Wildlife</option>
                        <option value="tent" <?php if ($row['tourType'] === 'tent') echo 'selected'; ?>>Tented safari camp</option>
                     </select>
                  </div>
               </div>
               <div class="right flex column g-3">
                  <!-- email -->
                  <div class="email flex column">
                     <label for="email">Email address</label>
                     <input type="email" name="email" value="<?php echo $row['email'] ?>"/>
                  </div>
                  <!-- date -->
                  <div class="date flex column">
                     <label for="date">Date for tour</label>
                     <input type="date" name="date" value="<?php echo $row['date'] ?>"/>
                  </div>
                  <!-- pkg type -->
                  <div class="pakage-type flex column g-1">
                     <label for="pakage_type">Selecte Pacakge Type</label>
                     <select name="pakage_type" >
                        <option value="basic" <?php if ($row['pkgType'] === 'basic') echo 'selected'; ?>>BASIC</option>
                        <option value="standard" <?php if ($row['pkgType'] === 'standard') echo 'selected'; ?>>STANDARD</option>
                        <option value="premium" <?php if ($row['pkgType'] === 'premium') echo 'selected'; ?>>PREMIUM</option>
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
               ><?php echo $row['message']; ?></textarea>
            </div>
            <!-- Status upgration -->
            <div class="reqTypeInput flex column g-1 w-100">
               <label for="reqType">Update Status: </label>
               <select name="reqType">
                  <option value="pending" <?php if($row['status'] === 'pending' ) echo 'selected'; ?>>Pending</option>
                  <option value="Approved" <?php if($row['status'] === 'Approved' ) echo 'selected'; ?>>Approved</option>
               </select>
            </div>
            <!-- button -->
            <div class="w-100 center g-2">
               <input type="submit" name="updateBtn" value="Update Reservetion" class="res-btn" />
            </div>

         </form>
      </section>
      <!-- JavaScript -->
      <script src="./src/main.js"></script>
   </body>
</html>
