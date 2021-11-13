<?php
require_once 'includes/header.php';
 ?>
 <?php
 if(isset($_SESSION['sessionname'])){
   echo "You are logged in!";
 }
 else {
   echo "Home";
 }
  ?>
<?php
require_once 'include/footer.php';
 ?>
