<?php
session_start();
if(isset($_SESSION['user']) && isset($_POST['password']) && isset($_POST['confirmpass'])){
        
         
         if($password != $confirmpass){
                  header("Location: profile.php?code=9");//Passwords don't match
                  die();
         }
         include "database.php";
         
         
         $id = $_SESSION['user'];
         $password = $_POST['password'];
         $confirmpass = $_POST['confirmpass'];
         
         $newpass = md5($password);
         $query = "UPDATE `user_table` SET password = '{$newpass}' WHERE id = {$id};";
         $run = mysqli_query($con, $query)?1:0;
                  
         header("Location: profile.php?code={$run}");
}else
              header("Location: login.php?code=88");


?>