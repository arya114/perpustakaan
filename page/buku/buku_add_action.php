<?php

    $koneksi = new mysqli ("localhost","root","","db_perpustakaann");

    if(isset($_POST['Submit'])) {
        $kode_buku = $_POST['kode_buku'];
        $judul_buku = $_POST['judul_buku'];
        $penulis = $_POST['penulis'];
        $penerbit = $_POST['penerbit'];
        $tahun_terbit = $_POST['tahun_terbit'];
        
                
        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO buku(kode_buku,judul_buku,penulis,penerbit,tahun_terbit) VALUES('$kode_buku','$judul_buku','$penulis','$penerbit','$tahun_terbit')");
    // header('location: page/buku/buku.php', true);
    header("Refresh:0; url='http://localhost/perpus/?page=buku'");
    // exit;
        // Show message when user added
        echo "buku berhasil tambahkan <a href='?=page=buku'>lihat buku</a>";
    }

?>