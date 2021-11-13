<?php
if(isset($_POST['submit'])){
  require 'database.php';
  $name=$_POST['name'];
  $userid=$_POST['user_id'];
  $password=$_POST['password'];
  $confirmpassword=$_POST['confirm_password'];

  if(empty($name)||empty($userid)||empty($password)||empty($confirmpassword)){
    header("Location:../register.php?error=emptyfield&name=".$name);
    exit();
  }
  else if(!preg_match("/^[a-zA-Z]/",$name))
  {
    header("Location:../register.php?error=invalidname&name=".$name);
    exit();
  }
  else if(!preg_match("/^[a-zA-Z0-9]/",$userid)){
    header("Location:../register.php?error=invaliduserid&name=".$name);
    exit();
  }
  else if($password!==$confirmpassword){
    header("Location:../register.php?error=passworddonotmatch&userid=".$userid);
    exit();
  }
  else{
    $sql="select user_id from users where user_id=?";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
      header("Location:../register.php?error=sqlerror");
      exit();
    }
    else{
      mysqli_stmt_bind_param($stmt,"s",$userid);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $rowcount=mysqli_stmt_num_rows($stmt);
      if($rowcount>0){
        header("Location:../register.php?error=usernametaken");
        exit();
      }
      else{
        $sql="insert into users values(?,?,?) ";
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
          header("Location:../register.php?error=sqlerror");
          exit();
        }else{
          $hashedpass=password_hash($password,PASSWORD_DEFAULT);
          mysqli_stmt_bind_param($stmt,"sss",$name,$userid,$hashedpass);
          mysqli_stmt_execute($stmt);
          mysqli_stmt_store_result($stmt);
          header("Location:../login.php?succes=registered");
          exit();
        }
      }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($connect);
}

 ?>
