<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="breadcome-list">
                <div class="row" style="display: flex;
    justify-content: start; align-items: center;">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="display: flex;
    justify-content: start;">
                        <div class="breadcomb-wp">
                            <div class="breadcomb-icon">
                                <i class="icon nalika-home"></i>
                            </div>
                            <div class="breadcomb-ctn" style="display: flex; align-items: center; ">
                                <h2>Halaman Tambah Barang</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Single pro tab start-->
<div class="single-product-tab-area mg-b-30">
    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-tab-pro-inner">
                        <div id="edit">
                            <ul id="myTab3" class="tab-review-design">
                                <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Tambah Produk</a></li>
                            </ul>
                        </div>

                        <form action="" method="post" enctype="multipart/form-data">
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-10 col-md-6 col-sm-6 col-xs-12">
                                            <div class="review-content-section" id="tengah">

                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>

                                                    <input type="text" class="form-control" placeholder="Nama Merek" name="nama_produk" autofocus required>
                                                </div>

                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="icon nalika-favorites" aria-hidden="true"></i></span>
                                                    <select name="select" class="form-control pro-edt-select form-control-primary">
                                                        <option value="">Pilih Ukuran Baju</option>
                                                        <option value="1">S</option>
                                                        <option value="2">M</option>
                                                        <option value="3">L</option>
                                                        <option value="4">XL</option>
                                                    </select>
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" placeholder="Stok Baju" name="stok" required>
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                    <input type="number" class="form-control" placeholder="Harga Baju" name="harga" required>
                                                </div>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                    <input type="file" class="form-control" placeholder="Harga Baju" name="gambar" required>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="text-center custom-pro-edt-ds">
                                                <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10" name="seve">Save
                                                </button>
                                                <button type="reset" class="btn btn-ctl-bt waves-effect waves-light">Reset
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </form>
                        <div class="product-tab-list tab-pane fade" id="reviews">
                            <div class="row" id="posisi">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="pro-edt-img">
                                                    <img src="img/new-product/5-small.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="product-edt-pix-wrap">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">TT</span>
                                                                <input type="text" class="form-control" placeholder="Label Name">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="form-radio">
                                                                        <form>
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i class="helper"></i>Largest Image
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i class="helper"></i>Medium Image
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i class="helper"></i>Small Image
                                                                                </label>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="product-edt-remove">
                                                                        <button type="button" class="btn btn-ctl-bt waves-effect waves-light">Remove
                                                                            <i class="fa fa-times" aria-hidden="true"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="pro-edt-img">
                                                    <img src="img/new-product/6-small.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="product-edt-pix-wrap">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">TT</span>
                                                                <input type="text" class="form-control" placeholder="Label Name">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="form-radio">
                                                                        <form>
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i class="helper"></i>Largest Image
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i class="helper"></i>Medium Image
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i class="helper"></i>Small Image
                                                                                </label>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="product-edt-remove">
                                                                        <button type="button" class="btn btn-ctl-bt waves-effect waves-light">Remove
                                                                            <i class="fa fa-times" aria-hidden="true"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="pro-edt-img mg-b-0">
                                                    <img src="img/new-product/7-small.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="product-edt-pix-wrap">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">TT</span>
                                                                <input type="text" class="form-control" placeholder="Label Name">
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="form-radio">
                                                                        <form>
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i class="helper"></i>Largest Image
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i class="helper"></i>Medium Image
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio radiofill">
                                                                                <label>
                                                                                    <input type="radio" name="radio"><i class="helper"></i>Small Image
                                                                                </label>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="product-edt-remove">
                                                                        <button type="button" class="btn btn-ctl-bt waves-effect waves-light">Remove
                                                                            <i class="fa fa-times" aria-hidden="true"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="INFORMATION">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="card-block">
                                            <div class="text-muted f-w-400">
                                                <p>No reviews yet.</p>
                                            </div>
                                            <div class="m-t-10">
                                                <div class="txt-primary f-18 f-w-600">
                                                    <p>Your Rating</p>
                                                </div>
                                                <div class="stars stars-example-css detail-stars">
                                                    <div class="review-rating">
                                                        <fieldset class="rating">
                                                            <input type="radio" id="star5" name="rating" value="5">
                                                            <label class="full" for="star5"></label>
                                                            <input type="radio" id="star4half" name="rating" value="4 and a half">
                                                            <label class="half" for="star4half"></label>
                                                            <input type="radio" id="star4" name="rating" value="4">
                                                            <label class="full" for="star4"></label>
                                                            <input type="radio" id="star3half" name="rating" value="3 and a half">
                                                            <label class="half" for="star3half"></label>
                                                            <input type="radio" id="star3" name="rating" value="3">
                                                            <label class="full" for="star3"></label>
                                                            <input type="radio" id="star2half" name="rating" value="2 and a half">
                                                            <label class="half" for="star2half"></label>
                                                            <input type="radio" id="star2" name="rating" value="2">
                                                            <label class="full" for="star2"></label>
                                                            <input type="radio" id="star1half" name="rating" value="1 and a half">
                                                            <label class="half" for="star1half"></label>
                                                            <input type="radio" id="star1" name="rating" value="1">
                                                            <label class="full" for="star1"></label>
                                                            <input type="radio" id="starhalf" name="rating" value="half">
                                                            <label class="half" for="starhalf"></label>
                                                        </fieldset>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="input-group mg-b-15 mg-t-15">
                                                <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" placeholder="User Name">
                                            </div>
                                            <div class="input-group mg-b-15">
                                                <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" placeholder="Last Name">
                                            </div>
                                            <div class="input-group mg-b-15">
                                                <span class="input-group-addon"><i class="icon nalika-mail" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="form-group review-pro-edt mg-b-0-pt">
                                                <button type="submit" class="btn btn-ctl-bt waves-effect waves-light">Submit
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<?php
include 'koneksi-database.php';
if (isset($_POST['seve'])) {
    $lokasi = $_FILES['gambar']['tmp_name'];
    $file_gambar = $_FILES['gambar']['name'];
    echo $file_gambar;

    if ($_POST['harga'] != "" && $_POST['nama_produk'] != "" && $_POST['stok'] != "" && $_POST['select'] != "" && $file_gambar != '') {
        $sql = mysqli_query($con, "insert into penjualan SET gambar='$file_gambar', harga ='$_POST[harga]',nama_baju = '$_POST[nama_produk]',stok = '$_POST[stok]', pilih_kategori = '$_POST[select]'");
        move_uploaded_file($lokasi, "photo/$file_gambar");
        if ($sql) {
?>
            <script type="text/javascript">
                alert("Data Berhasil Disimpan");
                window.location.href = "?halaman=barang";
            </script>
        <?php
        }
    } else {
        ?>
        <script type="text/javascript">
            alert("Jangan ada yang kosong datanya ...");
            window.location.href = "?halaman=barang&&aksi=create";
        </script>
<?php
    }
}


?>