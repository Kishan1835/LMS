<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <div class="container">

      <div class="content">
         <h3>hi, <span>admin</span></h3>
         <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
         <p>this is an admin page</p>
         <a href="login_form.php" class="btn">login</a>
         <a href="register_form.php" class="btn">register</a>
         <a href="logout.php" class="btn">logout</a>

          <!-- UPLOAD CODE  -->

         <form action="upload.php" method="post" enctype="multipart/form-data">
            Select File to upload: <input type="file" name="filetoupload" id="filetoupload">
            <input type="submit" value="upload File" name="submit">
         </form>

      </div>
      <!-- <a href="dbms.pdf" class="button"> click here</a> -->
   </div>
</body>

</html>