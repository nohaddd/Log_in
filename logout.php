
<?php
   session_start();
   if (session_destroy()) {
    
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
      body{
         text-align:center;
      }
      .one{
         color:red;
      }
   </style>
</head>
<body>
   <div class="one">
   <h1>Welcom User  Have Signed up</h1>
   <a href="login.php">Logout</a>
   
   </div>
   
</body>
</html>