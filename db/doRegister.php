<?php
         if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['cpassword']))
         {
               $username = $_POST['username'];   
               $email = trim($_POST['email']);   
               $password = trim($_POST['password']);   
               $cpassword = $_POST['cpassword'];   
                  
                  if($pass != $cpass)
                         header("Location: register.php?code=2");
                  else
                           include "database.php";
                  {
                           $query = "SELECT COUNT(*) as count from user_table where email = '{$email}';";
                           $run = mysqli_query($con, $query);
                           $get_row = mysqli_fetch_assoc($run);
                           if($get_row['count'] != 0){
                                header("Location: register.php?code=3");
                           }
                           else
                           {
                                                    
                                    $passEnc = md5($password);
                                    $reg_query = "INSERT INTO `user_login` (username, email, password) VALUES(
                                    '{$username}', '{$email}', '{$passEnc}');";
                                    if(mysqli_query($con, $reg_query))
                                             $code = 4;
                                    else
                                             $code=5;
                                    
                              
                                             header("Location: register.php?code=$code");
                           }
                                    
                           
                  }
         }
         else
                  header("Location: register.php?code=1");//Wrong request
?>