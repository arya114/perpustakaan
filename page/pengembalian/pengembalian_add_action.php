<?php

    $koneksi = new mysqli ("localhost","root","","db_perpustakaann");

    if(isset($_POST['Submit'])) {
        $kode_pengembalian = $_POST['kode_pengembalian'];
        $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
        $jatuh_tempo = $_POST['jatuh_tempo']; 
        $denda = $_POST['denda'];
        $jumlah_hari = $_POST['jumlah_hari'];
        $jumlah_denda = $_POST['jumlah_denda'];
        $kode_buku = $_POST['kode_buku'];
        $kode_anggota = $_POST['kode_anggota'];
        $kode_petugas = $_POST['kode_petugas'];
                
        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO pengembalian(kode_pengembalian,tanggal_pengembalian,jatuh_tempo,denda,jumlah_hari,jumlah_denda,kode_buku,kode_anggota,kode_petugas) 
                                                VALUES('$kode_pengembalian','$tanggal_pengembalian','$jatuh_tempo','$denda','$jumlah_hari','$jumlah_denda','$kode_buku','$kode_anggota','$kode_petugas')");
    // header('location: page/pengembalian/pengembalian.php', true);
    header("Refresh:0; url='http://localhost/perpus/?page=pengembalian'");
    // exit;
        // Show message when user added
        echo "pengembalian berhasil tambahkan <a href='?=page=pengembalian'>lihat pengembalian</a>";
    }

?>