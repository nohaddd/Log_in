




<?php

session_start();
$conn = mysqli_connect('localhost','root','','db')or die('Unable to connect');
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>lolo</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" 
  integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- ---- -->
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
      <div class="login">
        <div class="form_box">
          <h1 id="title">Sign In</h1>
          <form action=""  method="POST">
            <div class="input_group">

             
            <div class="input_field">
                <i class="fas fa-envelope"></i>      
                <input type="email" name="Email" placeholder="Email" required= "">
              </div>

              
              <div class="input_field">
                <i class="fas fa-lock"></i>
                <input type="password" name="Pass" placeholder="Password" required= "">
              </div>
              <p>Lost Password <a href="#">Click Here!</a></p>
            </div>

            <div class="btn_field">
            
            <button type="button" name="signup" id="signupBtn">Sign up</button>
               
            
              
            <button type="submit" name=""  value = "Sign_in" id="signinBtn">Sign in</button>
          
            </div>
          </form>
        </div>
      </div>
    </div>
 




    
    <?php
    if ($_SERVER['REQUEST_METHOD']== "POST") {
      $Email = $_POST['Email'];
      $Pass = $_POST['Pass'];

    $select = mysqli_query($conn, "SELECT * FROM tb_student WHERE Email='$Email'AND Pass='$Pass'");  
    $row = mysqli_fetch_array($select);
    if (is_array($row)) {
      $_SESSION["Email"]= $row['Email'];
      $_SESSION["Pass"]= $row['Pass'];
      
    }
    else {
      echo '<script type = "text/javascript">';
      echo 'alert("Invalid Email or Password")';
      echo 'window.location.href = "index.php"';
      echo '</script>';
   }
 }
 if(isset($_SESSION["Email"])){
      echo "<script type = 'text/javascript'> alert('Successfully  Register')</script>";
      header ("Location:Hi.php");
 }
 
?>

 <!-- script -->
 <script src="./js/main.js"></script>
</body>
</html>