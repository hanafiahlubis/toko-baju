<?php
include "koneksi-database.php";
mysqli_query($con, "DELETE FROM penjualan where id = '$_GET[id]'");
unlink("photo/$_GET[gambar]");
?>
<script type="text/javascript">
    alert("Data Berhasil Dihapus");
    window.location.href = "?halaman=barang";
</script>