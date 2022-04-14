<?php
session_start();
         if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['submit']))
         {
                  include "database.php";
                  if(!$con)
                          header("Location: login.php?code=2");
                  
                  $email = mysqli_real_escape_string($con, trim($_POST['email']));
                  $pass = mysqli_real_escape_string($con, $_POST['password']);
                  $hashedPass = md5($pass);
                  
                  $query = "SELECT id FROM `user_login` WHERE email = '".$email."' AND password = '".$pass."';";
                
                  $run_query = mysqli_query($con, $query);
                  $rows_fetched = mysqli_num_rows($run_query);
                  $id = mysqli_fetch_assoc($run_query)['id'];
                  
                  if($rows_fetched == 1){
                           $_SESSION['user'] = $id;
                           header("Location: /sdf/index.php");
                  }
                          
                  else
                           header("Location: login.php?code=3");                  
                 
         }

else
         header("Location: login.php?code=1");
?>
