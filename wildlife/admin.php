<?php include './includes/config.php' ?>

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
      <aside class="db-aside">
         <!-- dashbord navigation -->
         <div class="dashboard-nav-container flex column w-100">
            <a href="./index.php" class=" center logo n-link">
               <img
                  src="./images/logo-icon.png"
                  class="center"
                  width="40px"
                  alt=""
               />
               <h3>Co Life</h3>
            </a>
            <p class="active tab-link tab-1">Reservations</p>
            <p class="tab-link tab-2">Users Details</p>
            <p class="tab-link tab-3">Staff Members</p>
         </div>
         <div class="dashboard-btn">
            <button class="visit-btn"><a href="./index.php">View Website</a></button>
         </div>
      </aside>
      <main class="db-det">
         <!-- Dashboard container -->
         <!-- ------------------- -->
         <!-- res details -->
         <section class="sec-1 active sec w-100 column g-3">
            <div class="title">
               <h1>Welcome! Reservations here</h1>
            </div>
            <div class="y-tour-container">
            <table class="admin-res-table">
               <button id="add-res-manualy"><a href="./reservation/resForm.php" style="color:#fff;">Add Reservation Manualy</a></button>
               <th>
                  <tr style="background-color:#222; color:#fff;">
                     <td>Name</td>
                     <td>Email</td>
                     <td>Count</td>
                     <td>Date</td>
                     <td>Tour Type</td>
                     <td>Pakage Type</td>
                     <td>Status</td>
                     <td>Action</td>
                  </tr>
               </th>
               <tbody>
                  <!-- Data Showing -->
                  <?php
                     $sql = "SELECT * FROM `reservation`";
                     $result = mysqli_query($connection, $sql);

                     if($result){
                        while($row = mysqli_fetch_assoc($result)){
                           $resId = $row['resId'];
                           $fullName = $row['fullName'];
                           $email = $row['email'];
                           $date = $row['date'];
                           $count = $row['countOfPeople'];
                           $pkgType = $row['pkgType'];
                           $tourType = $row['tourType'];
                           $reqType = $row['status'];
                           $message = $row['message'];

                           echo '<tr style="background-color:#fff;">
                           <td>'.$fullName.'</td>
                           <td>'.$email.'</td>
                           <td>'.$count.'</td>
                           <td>'.$date.'</td>
                           <td>'.$tourType.'</td>
                           <td>'.$pkgType.'</td>
                           <td><p class="reqType">'.$reqType.'</p></td>
                           <td class="action">
                           <span>
                              <div class="res-type res-reject"><a href="./reservation/deleteRes.php?resId='.$resId.'">Delete</a></div>
                              <div class="res-type res-update"><a href="./reservation/updateRes.php?resId='.$resId.'">Update</a></div>
                           </span>
                           </td>
                           </tr>';
                        }
                     }

                  ?>
               </tbody>
               <!-- End of data showing -->
            </table>
            </div>
         </section>
         <!-- User details -->
         <section class="sec-2 sec w-100 vh-100 column g-3">
            <div class="title">
               <h1>Welcome! Registerd users</h1>
            </div>
            <div class="y-tour-container">
            <table class="admin-res-table">
               <button id="add-res-manualy">Add User</button>
               <th>
                  <tr style="background-color:#222; color:#fff;">
                     <td>User Id</td>
                     <td>Full Name</td>
                     <td>Email</td>
                     <td>Age</td>
                     <td>DOB</td>
                     <td>City</td>
                     <td>Steet</td>
                     <td>Action</td>
                  </tr>
               </th>
               <tbody>
                  <tr>
                     <td>1</td>
                     <td>Chathush Vishmika</td>
                     <td>chathush@gmail.com</td>
                     <td>22</td>
                     <td>2002-09-05</td>
                     <td>Bandarawela</td>
                     <td>Welimada</td>
                     <td class="action">
                           <span>
                              <div class="res-type res-reject">Delete</div>
                              <div class="res-type res-update">Update</div>
                           </span>
                     </td>
                  </tr>
                  <tr>
                     <td>2</td>
                     <td>Sadeesha Dilshan</td>
                     <td>sadeesha@gmail.com</td>
                     <td>21</td>
                     <td>2003-12-15</td>
                     <td>Moraatuwa</td>
                     <td>Lel road</td>
                     <td class="action">
                           <span>
                              <div class="res-type res-reject">Delete</div>
                              <div class="res-type res-update">Update</div>
                           </span>
                           </td>
                  </tr>
                  <tr>
                     <td>3</td>
                     <td>Janith Thathsara</td>
                     <td>janith@gmail.com</td>
                     <td>21</td>
                     <td>2003-03-23</td>
                     <td>Sewanagala</td>
                     <td>Road 2</td>
                     <td class="action">
                           <span>
                              <div class="res-type res-reject">Delete</div>
                              <div class="res-type res-update">Update</div>
                           </span>
                           </td>
                  </tr>
                  <tr>
                     <td>4</td>
                     <td>Vidula Sahan</td>
                     <td>vidula@gmail.com</td>
                     <td>22</td>
                     <td>2002-01-12</td>
                     <td>Colombo</td>
                     <td>Temple road</td>
                     <td class="action">
                           <span>
                              <div class="res-type res-reject">Delete</div>
                              <div class="res-type res-update">Update</div>
                           </span>
                           </td>
                  </tr>
                  <tr>
                     <td>5</td>
                     <td>Vageesha Udawaththe</td>
                     <td>vageesha@gmail.com</td>
                     <td>21</td>
                     <td>2003-12-30</td>
                     <td>Kandy</td>
                     <td>Road two</td>
                     <td class="action">
                           <span>
                              <div class="res-type res-reject">Delete</div>
                              <div class="res-type res-update">Update</div>
                           </span>
                           </td>
                  </tr>
               </tbody>
               <!-- End of data showing -->
            </table>
            </div>
         </section>
         <!-- staff details -->
         <section class="sec-3 sec w-100 vh-100 column g-3">
            <div class="title">
               <h1>Welcome! Staff members</h1>
            </div>
            <div class="y-tour-container">
            <table class="admin-res-table">
               <button id="add-res-manualy">Add Staff Member</button>
               <th>
                  <tr style="background-color:#222; color:#fff;">
                     <td>User Id</td>
                     <td>Full Name</td>
                     <td>Email</td>
                     <td>Age</td>
                     <td>DOB</td>
                     <td>City</td>
                     <td>Steet</td>
                     <td>Action</td>
                  </tr>
               </th>
               <tbody>
                  
                  <tr>
                     <td>S2</td>
                     <td>Sadeesha Dilshan</td>
                     <td>sadeesha@gmail.com</td>
                     <td>21</td>
                     <td>2003-12-15</td>
                     <td>Moraatuwa</td>
                     <td>Lel road</td>
                     <td class="action">
                           <span>
                              <div class="res-type res-reject">Delete</div>
                              <div class="res-type res-update">Update</div>
                           </span>
                           </td>
                  </tr>
                  <tr>
                     <td>S4</td>
                     <td>Vidula Sahan</td>
                     <td>vidula@gmail.com</td>
                     <td>22</td>
                     <td>2002-01-12</td>
                     <td>Colombo</td>
                     <td>Temple road</td>
                     <td class="action">
                           <span>
                              <div class="res-type res-reject">Delete</div>
                              <div class="res-type res-update">Update</div>
                           </span>
                           </td>
                  </tr>
                  <tr>
                     <td>S5</td>
                     <td>Vageesha Udawaththe</td>
                     <td>vageesha@gmail.com</td>
                     <td>21</td>
                     <td>2003-12-30</td>
                     <td>Kandy</td>
                     <td>Road two</td>
                     <td class="action">
                           <span>
                              <div class="res-type res-reject">Delete</div>
                              <div class="res-type res-update">Update</div>
                           </span>
                           </td>
                  </tr>
                  <tr>
                     <td>S1</td>
                     <td>Chathush Vishmika</td>
                     <td>chathush@gmail.com</td>
                     <td>22</td>
                     <td>2002-09-05</td>
                     <td>Bandarawela</td>
                     <td>Welimada</td>
                     <td class="action">
                           <span>
                              <div class="res-type res-reject">Delete</div>
                              <div class="res-type res-update">Update</div>
                           </span>
                     </td>
                  </tr>
                  <tr>
                     <td>S3</td>
                     <td>Janith Thathsara</td>
                     <td>janith@gmail.com</td>
                     <td>21</td>
                     <td>2003-03-23</td>
                     <td>Sewanagala</td>
                     <td>Road 2</td>
                     <td class="action">
                           <span>
                              <div class="res-type res-reject">Delete</div>
                              <div class="res-type res-update">Update</div>
                           </span>
                           </td>
                  </tr>
               </tbody>
               <!-- End of data showing -->
            </table>
            </div>
         </section>
      </main>

      <!-- JavaScript -->
      <script src="./src/main.js"></script>
   </body>
</html>