<?php

session_start();
include_once "config.php";

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if (!empty($email) && !empty($password)) {
   $sql = mysqli_query($conn, "Select * from users Where email = '{$email}' And password = '{$password}' ");
   if (mysqli_num_rows($sql) > 0) {
      $row = mysqli_fetch_assoc($sql);
      $_SESSION['unique_id'] = $row['unique_id'];
      echo "success";
   } else {
      echo "Incorrect Email or Password";
   }
} else {
   echo "All Input Fields are required";
}
