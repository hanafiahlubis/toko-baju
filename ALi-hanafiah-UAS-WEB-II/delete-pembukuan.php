<?php
include "koneksi-database.php";
mysqli_query($con, "DELETE FROM pembukuan where id = '$_GET[id]'");

?>
<script type="text/javascript">
    alert("Data Berhasil Dihapus");
    window.location.href = "?halaman=pembukuan";
</script>