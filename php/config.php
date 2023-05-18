<?php

$conn = mysqli_connect("localhost", "root", "", "register");

if (!$conn) {
   echo "Error connecting database...";
}
