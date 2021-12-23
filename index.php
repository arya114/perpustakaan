<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));?>
<?php

    $koneksi = new mysqli ("localhost","root","","db_perpustakaann");

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Perpustakaan</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

   <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Perpustakaan</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">  </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                    </li>
                
                    
                    <li>
                        <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>

                    <li>
                        <a  href="?page=petugas"><i class="fa fa-book fa-3x"></i> Petugas</a>
                    </li>

                    <li>
                        <a  href="?page=anggota"><i class="fa fa-book fa-3x"></i> Anggota</a>
                    </li>

                    <li>
                        <a  href="?page=buku"><i class="fa fa-book fa-3x"></i> Buku</a>
                    </li>

                    <li>
                        <a  href="?page=rak"><i class="fa fa-book fa-3x"></i> Rak</a>
                    </li>

                    <li>
                        <a  href="?page=peminjaman"><i class="fa fa-book fa-3x"></i> Peminjaman</a>
                    </li>

                    <li>
                        <a  href="?page=pengembalian"><i class="fa fa-book fa-3x"></i> Pengembalian</a>
                    </li>
  
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        
                        <?php

                            $page = $_GET['page'];
                            $aksi = $_GET['aksi'];

                            if ($page == "petugas") {
                                if ($aksi == "") {
                                    include "page/petugas/petugas.php";
                                }elseif($aksi == "tambah") {
                                    include "page/petugas/petugas_add.php";
                                }elseif($aksi == 'hapus') {
                                    include "page/petugas/petugas_delete.php";
                                }elseif($aksi == "ubah") {
                                    include "page/petugas/petugas_edit.php";
                                
                                }
                            }elseif ($page == "anggota") {
                                if ($aksi == '') {
                                    include "page/anggota/anggota.php";
                                }elseif($aksi == "tambah"){
                                    include "page/anggota/anggota_add.php";
                                }elseif($aksi == 'hapus'){
                                    include "page/anggota/anggota_delete.php";
                                }elseif($aksi == "ubah") {
                                    include "page/anggota/anggota_edit.php";
                                }
                            }elseif ($page == "buku") {
                                if ($aksi == '') {
                                    include 'page/buku/buku.php';
                                }elseif($aksi == "tambah"){
                                    include "page/buku/buku_add.php";
                                }elseif($aksi == 'hapus') {
                                    include "page/buku/buku_delete.php";
                                }elseif($aksi == "ubah") {
                                    include "page/buku/buku_edit.php";    
                                }
                            }elseif ($page == "rak") {
                                if ($aksi == '') {
                                    include "page/rak/rak.php";
                                }elseif($aksi == "tambah"){
                                    include "page/rak/rak_add.php";
                                }elseif($aksi == 'hapus') {
                                    include "page/rak/rak_delete.php";
                                }elseif($aksi == "ubah") {
                                    include "page/rak/rak_edit.php";  
                                }
                            }elseif ($page == "peminjaman") {
                                if ($aksi == '') {
                                    include "page/peminjaman/peminjaman.php";
                                }elseif($aksi == "tambah"){
                                    include "page/peminjaman/peminjaman_add.php";
                                }elseif($aksi == 'hapus') {
                                    include "page/peminjaman/peminjaman_delete.php";
                                }elseif($aksi == "ubah") {
                                    include "page/peminjaman/peminjaman_edit.php";
                                }
                            }elseif ($page == "pengembalian") {
                                if ($aksi == '') {
                                    include "page/pengembalian/pengembalian.php";
                                }elseif($aksi == "tambah"){
                                    include "page/pengembalian/pengembalian_add.php";
                                }elseif($aksi == 'hapus') {
                                    include "page/pengembalian/pengembalian_delete.php";
                                }elseif($aksi == "ubah") {
                                    include "page/pengembalian/pengembalian_edit.php";
                                }
                            }elseif ($page=="") {
                                include "home.php";
                            }

                        ?>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->

    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
