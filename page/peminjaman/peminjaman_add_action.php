<?php

    $koneksi = new mysqli ("localhost","root","","db_perpustakaann");

    if(isset($_POST['Submit'])) {
        $kode_peminjaman = $_POST['kode_peminjaman'];
        $tanggal_pinjam = $_POST['tanggal_pinjam'];
        $tanggal_kembali = $_POST['tanggal_kembali'];
        $kode_buku = $_POST['kode_buku'];
        $kode_anggota = $_POST['kode_anggota']; 
        $kode_petugas = $_POST['kode_petugas'];
                
        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO peminjaman(kode_peminjaman,tanggal_pinjam,tanggal_kembali,kode_buku,kode_anggota,kode_petugas) VALUES('$kode_peminjaman','$tanggal_pinjam','$tanggal_kembali','$kode_buku','$kode_anggota','$kode_petugas')");
    // header('location: page/peminjaman/peminjaman.php', true);
    header("Refresh:0; url='http://localhost/perpus/?page=peminjaman'");
    // exit;
        // Show message when user added
        echo "peminjaman berhasil tambahkan <a href='?=page=peminjaman'>lihat peminjaman</a>";
    }

?>