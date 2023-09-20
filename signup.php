
<?php

session_start();
$conn = mysqli_connect('localhost','root','','db')or die('Unable to connect');

if ($_SERVER['REQUEST_METHOD']== "POST") {
  $name= $_POST['Username'];
  $email= $_POST['Email'];
  $password= $_POST['Pass'];
  if (!empty($email) && !empty($password)) {
    $query = "insert into tb_student(Username,Email,Pass) values ('$name','$email','$password')";
    mysqli_query($conn,$query);
    echo "<script type = 'text/javascript'> alert('Successfully  Register')</script>";
    header ("Location:logout.php");
  
  }
  else
  {
    echo "<script type = 'text/javascript'> alert('Please Enter some Valid information')</script>";
    

  }
}
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
          <h1 id="title">Sign Up</h1>
          <form action=""  method="POST">
            <div class="input_group">

              <div class="input_field" id="nameField">
                <i class="fas fa-user"></i>
                <input type="text" name="Username" placeholder="Name" required= "">
              </div>

              <div class="input_field">
                <i class="fas fa-envelope"></i>      
                <input type="email" name="Email" placeholder="Email" required= "">
              </div>

              
              <div class="input_field">
                <i class="fas fa-lock"></i>
                <input type="password" name="Pass" placeholder="Password"required= "">
              </div>
              <p>Lost Password <a href="#">Click Here!</a></p>
            </div>

            <div class="btn_field">
            
            <button type="submit" name=""  value = "Sign_up" id="signupBtn">Sign up</button>
               
           
              
            <button type="submit" name=""  value = "Sign_in" id="signinBtn">Sign in</button>
          
            
           

            </div>
          </form>
        </div>
      </div>
    </div>

<!---->
   
 
 <!-- script -->
 <script src="./js/main.js"></script>
</body>
</html>