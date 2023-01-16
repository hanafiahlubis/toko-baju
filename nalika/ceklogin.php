<?php
	session_start();
	require "koneksi-database.php";
	$nama_user = $_POST['username'];
	$kata_kunci = $_POST['password'];
	$qcekdata = mysqli_query($con,"select * from admin_toko q    where user_admin = '$nama_user' and pass_admin = '$kata_kunci'");
	$ada = mysqli_num_rows($qcekdata);
	if ($ada > 0)
	{
		$tdata = mysqli_fetch_array($qcekdata);
		$_SESSION['nama_user123'] = $tdata['user_admin'];
		$_SESSION['kata_kunci123'] = $tdata['pass_admin'];
		// $_SESSION['nama_lengkap'] = $tdata['nama_lengkap'];
		// header("location:index2.php");
        echo "Berhasil horeh";
    } else
	{
		header("location:login.php");
	}
?>
