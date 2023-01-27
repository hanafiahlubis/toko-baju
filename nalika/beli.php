<?php
include 'koneksi-database.php';
$id = $_GET['id'];
$sql = $con->query("select * from penjualan where id = '$id'");
$tampilan = $sql->fetch_assoc();
$nama_barang = $tampilan['nama_baju'];
$harga = $tampilan['harga'];
$stok = $tampilan['stok'];
$pilih_k = $tampilan['pilih_kategori'];
$stok_beli = $_GET['stok'];
if ($stok_beli <= $stok) {
?>
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
                                    <h2>Halaman Transaksi</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-product-tab-area mg-b-30">
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-tab-pro-inner">
                            <div id="edit">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> pembelian Baju</a></li>
                                </ul>
                            </div>

                            <form action="" method="post">
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="col-lg-10 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section" id="tengah">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control input-disabled" disabled name="Nama Merek" value="<?php echo $nama_barang ?>" required>
                                                    </div>

                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-favorites" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control input-disabled" name="ukuran" value="<?php if ($pilih_k == "1") {
                                                                                                                                        echo "S";
                                                                                                                                    } else if ($pilih_k == "2") {
                                                                                                                                        echo "M";
                                                                                                                                    } else if ($pilih_k == "3") {
                                                                                                                                        echo "L";
                                                                                                                                    } else if ($pilih_k == "4") {
                                                                                                                                        echo "Xl";
                                                                                                                                    } ?>" required>

                                                    </div>

                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control input-disabled" disabled name="stok" value="<?php echo $stok ?>" required>
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control input-disabled" placeholder="Harga Baju" disabled name="harga" value='Rp. <?php echo  "$harga" ?>' required>
                                                    </div>

                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control input-disabled" placeholder="Total Penjualan" disabled value="<?php
                                                                                                                                                                $temp = $harga * $stok_beli;
                                                                                                                                                                echo "Rp. " . $temp;
                                                                                                                                                                ?>" name="total" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                    <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10" name="beli">Beli
                                                    </button>
                                                    <button type="submit" class="btn btn-ctl-bt waves-effect waves-light" href=""><a href="?">Batal</a>
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
                                                    <a type="submit" class="btn btn-ctl-bt waves-effect waves-light">Submit
                                                    </a>
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
    if (isset($_POST['beli'])) {

        $hasil = $stok - $stok_beli;
        mysqli_query($con, "update penjualan set stok = $hasil where id= $id");
        $insert = mysqli_query($con, "insert into pembukuan set nama_baju = '$nama_barang', stok_terjual = $stok_beli,harga = $harga, total_terjual = $temp");

    ?>
        <script type="text/javascript">
            alert("Pembelian Berhasil\n___-~Terimakasih~-___");
            window.location = "?halaman=transaksi";
        </script>

    <?php
    }
} else {
    ?>
    <script type="text/javascript">
        alert("stok nya kurang maaf yah!!!");
        window.location = "?halaman=transaksi";
    </script>
<?php
}


?>