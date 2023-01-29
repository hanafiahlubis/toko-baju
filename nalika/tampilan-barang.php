<style>
    .tambah {
        padding: 6px;
        color: #fff;
        background-color: #000;
        border-radius: 10px 10px 0 0;
    }
</style>
<div class="row" style="margin: 1rem;">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="personal-info-wrap">
            <div class="widget-head-info-box">
                <div class="persoanl-widget-hd">
                    <h2>Data Barang</h2>
                </div>
                <img src="./photo/barang.png" style="width: 90px;height: 90px; border-radius: 100%;" class="img-circle circle-border m-b-md" alt="profile">
                <div class="social-widget-result">
                    <span>

                        <?php
                        $data2 = mysqli_query($con, "select * from penjualan");
                        echo "Banyak Barang " . mysqli_num_rows($data2);
                        ?>
                    </span>

                </div>
            </div>

        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="author-widgets-single ">
            <div class="author-wiget-inner">
                <div class="perso-img">
                    <img src="./photo/data-transaksi.jpg" style="width: 90px;height: 90px; border-radius: 100%;" class="img-circle circle-border m-b-md" alt="profile">
                </div>
                <div class="persoanl-widget-hd persoanl1-widget-hd">
                    <h2>Data Pembelian</h2>
                    <p></p>
                </div>
                <div class="social-widget-result social-widget1-result">
                    <span>
                        <?php
                        $data3 = mysqli_query($con, "select * from pembukuan");
                        echo "Banyak Pembelian " . mysqli_num_rows($data3);
                        ?></span>
                </div>
            </div>

        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="personal-info-wrap personal-info-ano ">
            <div class="widget-head-info-box">
                <div class="persoanl-widget-hd">
                    <h2>Transaksi</h2>
                </div>
                <img src="./photo/logo-transaksi.png" style="width: 90px;height: 90px; border-radius: 100%;" class="img-circle circle-border m-b-md" alt="profile">
                <div class="social-widget-result">
                    <span> <?php
                            $data4 = mysqli_query($con, "select * from penjualan");
                            echo "Banyak Data " . mysqli_num_rows($data4);
                            ?></span>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="table22" style="overflow-y: auto; width: 100%; height: 22.2rem;">
    <table class="table table-dark" style="color: whitesmoke;">
        <caption style="color: #fff;">
            <center><strong>Data Barang</strong></center>
        </caption>
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Merek Baju</th>
                <th scope="col">Gambar</th>
                <th scope="col">Ukuran</th>
                <th scope="col">Stok</th>
                <th scope="col">Harga</th>
                <th scope="col">EDIT</th>
                <th scope="col">HAPUS</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require "koneksi-database.php";
            $tampilanStok = mysqli_query($con, "SELECT  a.gambar,a.id,a.nama_baju,a.harga,a.stok,b.ukuran FROM penjualan a INNER JOIN kategori b ON a.pilih_kategori = b.id_kategori ORDER BY harga DESC;");
            $x = 0;
            $i = 1;
            while ($tmp = mysqli_fetch_array($tampilanStok)) {
            ?>
                <tr>
                    <th scope='row'><?php echo $i; ?></th>;
                    <td><?php echo $tmp['nama_baju']; ?></td>
                    <td><img src="photo/<?php echo $tmp['gambar']; ?>" class="img" alt=""></td>
                    <td><?php echo  $tmp['ukuran']; ?></td>
                    <td><?php echo  $tmp['stok']; ?></td>
                    <td><?php echo "RP. " . $tmp['harga']; ?></td>
                    <td><a href="?halaman=barang&&aksi=update&&id=<?php echo $tmp['id']; ?>" class="tombol tambah">EDIT</a></td>
                    <td><a class="tombol tambah" onclick="return confirm('Anda Yakin Akan Menghapus Data ini ... ??')" href="?halaman=barang&&aksi=Delete&id=<?php echo $tmp['id']; ?>&&gambar=<?php echo $tmp['gambar']; ?>" class="tombol">Hapus</a>
                    </td>
                </tr>
            <?php
                $x++;
                $i++;
            }
            ?>

        </tbody>
    </table>
    <a href="?halaman=barang&&aksi=create" class="tambah">tambah</a>
</div>