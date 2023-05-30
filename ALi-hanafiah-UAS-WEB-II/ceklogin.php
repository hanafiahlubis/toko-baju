<?php
session_start();
require "koneksi-database.php";
$nama_user = $_POST['username'];
$kata_kunci = $_POST['password'];
$qcekdata = mysqli_query($con, "select * from admin_toko where user_admin = '$nama_user' and pass_admin = '$kata_kunci'");
$ada = mysqli_num_rows($qcekdata);
if ($ada > 0) {
	$tdata = mysqli_fetch_array($qcekdata);
	$_SESSION['nama_user123'] = $tdata['user_admin'];
	$_SESSION['kata_kunci123'] = $tdata['pass_admin'];
	header("location: index.php");
} else {
?>
	<script type="text/javascript">
		alert("Maaf coba lagi Anda salah memasukkan Username atau Password");
	</script>
<?php
	header("location:login.php");
}
?>