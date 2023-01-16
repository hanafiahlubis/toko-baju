<?php
require "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$aksi = $_GET['aksi'];

mysqli_query($con, "insert into user_pembeli values ('NULL','$username','$password','$email')");

header("location:index.php?err=$kodeerror");
