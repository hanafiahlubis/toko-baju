<?php
require "koneksi-database.php";
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$username = $_POST['username'];


mysqli_query($con, "insert into user_pembeli values ('NULL','$name','$email','$username','$password')");

echo "dsahdhasuidas";

header("location:login.php");
