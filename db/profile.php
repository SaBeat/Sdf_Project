<?php
session_start();
if(!isset($_SESSION['user']))
         header("Location: login.php");

         include "database.php";
         $id = $_SESSION['user'];
         $query = "SELECT username as fullname FROM user_login WHERE id = '{$id}';";
         $run = mysqli_query($con, $query);
         $fetch = mysqli_fetch_assoc($run);
         include "header.php";
?>
         <div class="main" align="center">
              
                  <h3><a href="logout.php">Log out</a></h3>
                  
                  <div class="password">
                           <form action="save.php" method="post">
                                  <input type="password" name="password" placeholder="Enter your password">  <br/>
                                  <input type="password" name="confirmpass" placeholder="Enter your password again">  
                                    <input type="submit" value="Change password" />
                           </form>
                  </div>
                  
                 
                  
                  
         </div>
</body>
</html>