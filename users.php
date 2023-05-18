<?php
session_start();
if (!isset($_SESSION['unique_id'])) {
   header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User Page</title>
   <link rel="stylesheet" href="css/style.css">
</head>

<body>
   <div class="container">
      <?php
      include_once "php/config.php";
      $query = mysqli_query($conn, "SELECT * FROM users WHERE unique_id={$_SESSION['unique_id']}");
      if (mysqli_num_rows($query) > 0) {
         $row = mysqli_fetch_assoc($query);
      }
      ?>
      <div class="id">
         <h2>Hii, Your Unique Id is <span> <?php echo $row['unique_id'] ?> </span></h2>
      </div>
      <div class="name">
         <h2>Hii, Your Name is <span> <?php echo $row['name'] ?> </span></h2>
      </div>
      <div class="email">
         <h2>Hii, Your Email Id is <span> <?php echo $row['email'] ?> </span></h2>
      </div>
   </div>
   <a class="btn-logout" href="php/logout.php">Logout</a>
</body>

</html>