<?php include '../includes/config.php'; ?>

<?php
   if(isset($_GET['resId'])){
      $resId = $_GET['resId'];
   }

   $query = "DELETE FROM `reservation` WHERE `resId` = '$resId'";
   $result = mysqli_query($connection, $query);

   if(!$result){
      echo "Faild";
   }
   else{
      header('location:../admin.php');
   }

?>