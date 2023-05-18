<?php
session_start();
include_once "config.php";
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if (!empty($name) && !empty($email) && !empty($password)) {
   if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$email}'");
      if (mysqli_num_rows($query) > 0) {
         echo "User already exists";
      } else {
         $random_id = rand(time(), 10000);
         $query2 = mysqli_query($conn, "INSERT INTO users (unique_id, name, email, password) VALUES ({$random_id},'{$name}','{$email}','{$password}')");
         if ($query2) {
            $query3 = mysqli_query($conn, "SELECT * FROM users WHERE email='{$email}'");
            if (mysqli_num_rows($query3) > 0) {
               $row = mysqli_fetch_assoc($query3);
               $_SESSION['unique_id'] = $row['unique_id'];
               echo "success";
            } else {
               echo "Unknown Error occured";
            }
         } else {
            echo "Error";
         }
      }
   } else {
      echo "Invalid Email format";
   }
} else {
   echo "All Input Fields are required";
}
