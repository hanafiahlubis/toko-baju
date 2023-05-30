<div class="form-group">
    <label for="gambar">Foto Menu</label>
    <input type="file" class="form-control-file border" id="gambar" name="gambar">
</div><br>

<?php
if (isset($_POST['tambah'])) {

    $nama_file = $_FILES['gambar']['name'];
    $source = $_FILES['gambar']['tmp_name'];
    $folder = '../assets/img';

    move_uploaded_file($source, $folder . $nama_file);
    $insert = mysqli_query($con, "INSERT INTO produk_menu VALUES (NULL, '$nama','$jenis','$harga','$nama_file')");
    if ($insert) {
        header("location: Data.php");
    } else {
        echo "Maaf, terjadi kesalahan saat mencoba menyimpan data ke database";
    }
}
?>