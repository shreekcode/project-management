<?php
if(isset($_POST['submit'])){
  require 'database.php';
  $userid=$_POST['user_id'];
  $password=$_POST['password'];
  if(empty($userid)||empty($password)){
    header("Location:../login.php?error=emptyfield");
    exit();
  }
  else{
    $sql="select * from users where user_id=?";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
      header("Location:../login.php?error=sqlerror");
      exit();
    }
    else{
      mysqli_stmt_bind_param($stmt,"s",$userid);
      mysqli_stmt_execute($stmt);
      $results=mysqli_stmt_get_result($stmt);

      if($row=mysqli_fetch_assoc($results)){
        $passcheck=password_verify($password,$row['password']);
        if($passcheck==false){
          header("Location:../login.php?error=wrongpassword");
          exit();
        }
        elseif ($passcheck==true) {
          session_start();
          $_SESSION['sessionname']=$row['name'];
          $_SESSION['sessionuser']=$row['user_id'];
          header("Location:../main.php?success=loggedin");
          exit();
        }
        else{
          header("Location:../login.php?error=wrongpassword");
          exit();
        }
      }
      else {
        header("Location:../login.php?error=nouser");
        exit();
      }
    }
  }
}
else{
  header("Location:../login.php?error=accessforbidden");
  exit();
}

 ?>
