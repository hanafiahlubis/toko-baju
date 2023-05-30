<?php
require "koneksi-database.php";

session_start();
if (empty($_SESSION['nama_user123']) and empty($_SESSION['kata_kunci123'])) {
  header("location:login.php");
}

?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>AL-likah</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- favicon
		============================================ -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
  <!-- Google Fonts
		============================================ -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet" />

  <link rel="stylesheet" href="style2.css" />

  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- Bootstrap CSS
		============================================ -->
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <!-- nalika Icon CSS
		============================================ -->
  <link rel="stylesheet" href="css/nalika-icon.css" />
  <!-- owl.carousel CSS
		============================================ -->
  <link rel="stylesheet" href="css/owl.carousel.css" />
  <link rel="stylesheet" href="css/owl.theme.css" />
  <link rel="stylesheet" href="css/owl.transitions.css" />
  <!-- animate CSS
		============================================ -->
  <link rel="stylesheet" href="css/animate.css" />
  <!-- normalize CSS
		============================================ -->
  <link rel="stylesheet" href="css/normalize.css" />
  <!-- meanmenu icon CSS
		============================================ -->
  <link rel="stylesheet" href="css/meanmenu.min.css" />
  <!-- main CSS
		============================================ -->
  <link rel="stylesheet" href="css/main.css" />
  <!-- morrisjs CSS
		============================================ -->
  <link rel="stylesheet" href="css/morrisjs/morris.css" />
  <!-- mCustomScrollbar CSS
		============================================ -->
  <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css" />
  <!-- metisMenu CSS
		============================================ -->
  <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css" />
  <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css" />
  <!-- calendar CSS
		============================================ -->
  <link rel="stylesheet" href="css/calendar/fullcalendar.min.css" />
  <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css" />
  <!-- style CSS
		============================================ -->
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="style2.css">
  <!-- responsive CSS
		============================================ -->
  <link rel="stylesheet" href="css/responsive.css" />
  <!-- modernizr JS
		============================================ -->
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

  <div class="left-sidebar-pro">
    <nav id="sidebar" class="">
      <div class="sidebar-header">
        <a href="index.php" style="display: flex;justify-content: center; align-items: center;"><img class="main-logo" src="img/logo/logosn.png" alt="" />
          <h1 style="font-size: 21px;color: #fff; ">Al-Likah</h1>
        </a>
        <strong><img src="img/logo/logosn.png" alt="" /></strong>
      </div>
      <div class="nalika-profile">
        <div class="profile-dtl">
          <a href="index.php"><img src="photo/admin2.jpg" alt="tidak di temukan" /></a>
          <h2> <span class="min-dtn">A D M I N </span></h2>
        </div>
        <div class="profile-social-dtl">
          <ul class="dtl-social">
            <li>
              <a href="#"><i class="icon nalika-facebook"></i></a>
            </li>
            <li>
              <a href="#"><i class="icon nalika-twitter"></i></a>
            </li>
            <li>
              <a href="https://id.linkedin.com/"><i class="icon nalika-linkedin"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="left-custom-menu-adp-wrap comment-scrollbar">
        <nav class="sidebar-nav left-sidebar-menu-pro">
          <ul class="metismenu" id="menu1">
            <li class="active">
              <a class="has-arrow" href="index.html">
                <i class="icon nalika-home icon-wrap"></i>
                <span class="mini-click-non">Ecommerce</span>
              </a>
              <ul class="submenu-angle" aria-expanded="true">
                <li>
                  <a title="Dashboard v.1" href="index.php? "><span class="mini-sub-pro">Home</span></a>
                </li>
                <li>
                  <a title="Product List" href="?halaman=barang"><span class="mini-sub-pro">Data Barang</span></a>
                </li>
                <li>
                  <a title="Product Edit" href="?halaman=pembukuan"><span class="mini-sub-pro">Data pembelian</span></a>
                </li>
                <li>
                  <a title="Product Detail" href="?halaman=transaksi"><span class="mini-sub-pro">Transaksi</span></a>
                </li>
                <li>
                  <a title="Product Cart" href="log-out.php"><span class="mini-sub-pro">Log Out</span></a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
    </nav>
  </div>
  <!-- Start Welcome area -->
  <div class="all-content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="logo-pro">
            <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
          </div>
        </div>
      </div>
    </div>
    <div class="header-advance-area">
      <div class="header-top-area">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="header-top-wraper">
                <div class="row">
                  <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                    <div class="menu-switcher-pro">
                      <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                        <i class="icon nalika-menu-task"></i>
                      </button>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                    <div class="header-top-menu tabl-d-n hd-search-rp">
                      <div class="breadcome-heading">
                        <form role="search" class="">
                          <input type="text" placeholder="" class="form-control" />
                          <!-- <a href=""><i class="fa fa-search"></i></a> -->
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="header-right-info">
                      <ul class="nav navbar-nav mai-top-nav header-right-menu">
                        <li class="nav-item">
                          <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                            <i class="icon nalika-user"></i>
                            <span class="admin-name">Admin Al-Likah</span>
                            <i class="icon nalika-down-arrow nalika-angle-dw"></i>
                          </a>
                          <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                            <li>
                              <a href="register.php"><span class="icon nalika-home author-log-ic"></span>
                                Register</a>
                            </li>
                            <li>
                              <a href="?halaman=barang"><span class="icon nalika-user author-log-ic"></span>
                                Data Barang</a>
                            </li>
                            <li>
                              <a href="?halaman=pembukuan"><span class="icon nalika-diamond author-log-ic"></span>
                                Data pembelian</a>
                            </li>
                            <li>
                              <a href="?halaman=transaksi"><span class="icon nalika-settings author-log-ic"></span>
                                Transaksi</a>
                            </li>
                            <li>
                              <a href="log-out.php"><span class="icon nalika-unlocked author-log-ic"></span>
                                Log Out</a>
                            </li>
                          </ul>
                        </li>

                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Mobile Menu start -->
      <div class="mobile-menu-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="mobile-menu">
                <nav id="dropdown">
                  <ul class="mobile-menu-nav">
                    <li>
                      <a data-toggle="collapse" data-target="#Charts" href="#">Home
                        <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                      <ul class="collapse dropdown-header-top">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="product-list.html">Product List</a></li>
                        <li><a href="product-edit.html">Product Edit</a></li>
                        <li>
                          <a href="product-detail.html">Product Detail</a>
                        </li>
                        <li><a href="product-cart.html">Product Cart</a></li>
                        <li>
                          <a href="product-payment.html">Product Payment</a>
                        </li>
                        <li><a href="analytics.html">Analytics</a></li>
                        <li><a href="widgets.html">Widgets</a></li>
                      </ul>
                    </li>
                    <li>
                      <a data-toggle="collapse" data-target="#demo" href="#">Mailbox
                        <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                      <ul id="demo" class="collapse dropdown-header-top">
                        <li><a href="mailbox.html">Inbox</a></li>
                        <li><a href="mailbox-view.html">View Mail</a></li>
                        <li>
                          <a href="mailbox-compose.html">Compose Mail</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a data-toggle="collapse" data-target="#others" href="#">Miscellaneous
                        <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                      <ul id="others" class="collapse dropdown-header-top">
                        <li><a href="file-manager.html">File Manager</a></li>
                        <li><a href="contacts.html">Contacts Client</a></li>
                        <li><a href="projects.html">Project</a></li>
                        <li>
                          <a href="project-details.html">Project Details</a>
                        </li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-details.html">Blog Details</a></li>
                        <li><a href="404.html">404 Page</a></li>
                        <li><a href="500.html">500 Page</a></li>
                      </ul>
                    </li>
                    <li>
                      <a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface
                        <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                      <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                        <li><a href="google-map.html">Google Map</a></li>
                        <li><a href="data-maps.html">Data Maps</a></li>
                        <li><a href="pdf-viewer.html">Pdf Viewer</a></li>
                        <li><a href="x-editable.html">X-Editable</a></li>
                        <li><a href="code-editor.html">Code Editor</a></li>
                        <li><a href="tree-view.html">Tree View</a></li>
                        <li><a href="preloader.html">Preloader</a></li>
                        <li>
                          <a href="images-cropper.html">Images Cropper</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts
                        <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                      <ul id="Chartsmob" class="collapse dropdown-header-top">
                        <li><a href="bar-charts.html">Bar Charts</a></li>
                        <li><a href="line-charts.html">Line Charts</a></li>
                        <li><a href="area-charts.html">Area Charts</a></li>
                        <li>
                          <a href="rounded-chart.html">Rounded Charts</a>
                        </li>
                        <li><a href="c3.html">C3 Charts</a></li>
                        <li><a href="sparkline.html">Sparkline Charts</a></li>
                        <li><a href="peity.html">Peity Charts</a></li>
                      </ul>
                    </li>
                    <li>
                      <a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables
                        <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                      <ul id="Tablesmob" class="collapse dropdown-header-top">
                        <li><a href="static-table.html">Static Table</a></li>
                        <li><a href="data-table.html">Data Table</a></li>
                      </ul>
                    </li>
                    <li>
                      <a data-toggle="collapse" data-target="#formsmob" href="#">Forms
                        <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                      <ul id="formsmob" class="collapse dropdown-header-top">
                        <li>
                          <a href="basic-form-element.html">Basic Form Elements</a>
                        </li>
                        <li>
                          <a href="advance-form-element.html">Advanced Form Elements</a>
                        </li>
                        <li>
                          <a href="password-meter.html">Password Meter</a>
                        </li>
                        <li><a href="multi-upload.html">Multi Upload</a></li>
                        <li><a href="tinymc.html">Text Editor</a></li>
                        <li>
                          <a href="dual-list-box.html">Dual List Box</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views
                        <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                      <ul id="Appviewsmob" class="collapse dropdown-header-top">
                        <li>
                          <a href="basic-form-element.html">Basic Form Elements</a>
                        </li>
                        <li>
                          <a href="advance-form-element.html">Advanced Form Elements</a>
                        </li>
                        <li>
                          <a href="password-meter.html">Password Meter</a>
                        </li>
                        <li><a href="multi-upload.html">Multi Upload</a></li>
                        <li><a href="tinymc.html">Text Editor</a></li>
                        <li>
                          <a href="dual-list-box.html">Dual List Box</a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a data-toggle="collapse" data-target="#Pagemob" href="#">Pages
                        <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                      <ul id="Pagemob" class="collapse dropdown-header-top">
                        <li><a href="login.html">Login</a></li>
                        <li><a href="register.html">Register</a></li>
                        <li><a href="lock.html">Lock</a></li>
                        <li>
                          <a href="password-recovery.html">Password Recovery</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Mobile Menu end -->
    <div id="jarak">

      <div class="breadcome-area">
        <div class="author-area-pro">
          <div class="container-fluid">
            <?php
            error_reporting(E_ALL ^ E_WARNING || E_NOTICE);

            $halaman = $_GET['halaman'];
            $aksi = $_GET['aksi'];
            $pesan = $_GET['pesan'];
            if ($halaman == "barang") {
              if ($aksi == "") {
                include "tampilan-barang.php";
              } else if ($aksi == "update") {
                include "edit-barang.php";
              } else if ($aksi == "create") {
                include "tambah-barang.php";
              } else if ($aksi == "Delete") {
                include "delete.php";
              }
            } else if ($halaman == "pembukuan") {
              include "pembukuan.php";

              if ($aksi == "Delete") {
                include "delete-pembukuan.php";
              } else if ($aksi == "Delete-semua") {
                include "delete-pembukuan2.php";
              }
            } else if ($halaman == "transaksi") {
              if ($pesan == "a") {
                include "beli.php";
              } else if ($aksi == "") {
                include "transaksi.php";
              } else if ($aksi == "beli") {
                include "pesan.php";
              }
            } else {
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
                            <div class="breadcomb-ctn" style="display: block;
    justify-content: space-between;align-items: center; ">
                              <h2>HOME</h2>
                              <p>
                                Welcome to Al-Likah
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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
            <?php
            }
            ?>
            <div class="footer-copyright-area" style="    position: relative;bottom: -4.5rem;">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <p class="footer-p">
                      Copyright © Ali Hanafiah
                      <a href="https://colorlib.com/wp/templates/">Lubis</a> All rights
                      reserved.
                    </p>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
      <!-- jquery
		============================================ -->
      <script src="js/vendor/jquery-1.12.4.min.js"></script>
      <!-- bootstrap JS
		============================================ -->
      <script src="js/bootstrap.min.js"></script>
      <!-- wow JS
		============================================ -->
      <script src="js/wow.min.js"></script>
      <!-- price-slider JS
		============================================ -->
      <script src="js/jquery-price-slider.js"></script>
      <!-- meanmenu JS
		============================================ -->
      <script src="js/jquery.meanmenu.js"></script>
      <!-- owl.carousel JS
		============================================ -->
      <script src="js/owl.carousel.min.js"></script>
      <!-- sticky JS
		============================================ -->
      <script src="js/jquery.sticky.js"></script>
      <!-- scrollUp JS
		============================================ -->
      <script src="js/jquery.scrollUp.min.js"></script>
      <!-- mCustomScrollbar JS
		============================================ -->
      <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
      <!-- metisMenu JS
		============================================ -->
      <script src="js/metisMenu/metisMenu.min.js"></script>
      <script src="js/metisMenu/metisMenu-active.js"></script>
      <!-- sparkline JS
		============================================ -->
      <script src="js/sparkline/jquery.sparkline.min.js"></script>
      <script src="js/sparkline/jquery.charts-sparkline.js"></script>
      <!-- calendar JS
		============================================ -->
      <script src="js/calendar/moment.min.js"></script>
      <script src="js/calendar/fullcalendar.min.js"></script>
      <script src="js/calendar/fullcalendar-active.js"></script>
      <!-- float JS
		============================================ -->
      <script src="js/flot/jquery.flot.js"></script>
      <script src="js/flot/jquery.flot.resize.js"></script>
      <script src="js/flot/curvedLines.js"></script>
      <script src="js/flot/flot-active.js"></script>
      <!-- plugins JS
		============================================ -->
      <script src="js/plugins.js"></script>
      <!-- main JS
		============================================ -->
      <script src="js/main.js"></script>
</body>

</html>