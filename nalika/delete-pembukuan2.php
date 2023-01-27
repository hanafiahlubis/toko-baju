<?php
$tampilanStok = mysqli_query($con, "SELECT * FROM pembukuan");

while ($tmp = mysqli_fetch_array($tampilanStok)) {
    $chek = true;
}
if ($chek == true) {
    include "koneksi-database.php";
    mysqli_query($con, "DELETE FROM pembukuan");
?>
    <script type="text/javascript">
        alert("__ Data Berhasil Dihapus __");
        window.location.href = "?";
    </script>
<?php
} else {
?>
    <script type="text/javascript">
        window.location.href = "";
        alert("-_ Maaf Data tidak ada _-");
    </script>
<?php
}
?>