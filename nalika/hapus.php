<?php
$id = $_GET['id'];
$koneksi->query("delete from penjualan where id='$id'");
?>
<script type="text/javascript">
    window.location.href = "?halaman=barang";
</script>