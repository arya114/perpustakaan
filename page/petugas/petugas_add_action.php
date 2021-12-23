<?php

    $koneksi = new mysqli ("localhost","root","","db_perpustakaann");

    if(isset($_POST['Submit'])) {
        $kode_petugas = $_POST['kode_petugas'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $jabatan = $_POST['jabatan'];
        $telpon = $_POST['telpon'];
        $alamat = $_POST['alamat'];
        $jam_tugas = $_POST['jam_tugas'];
        
                
        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO petugas(kode_petugas,nama,jk,jabatan,telp,alamat,jam_tugas) VALUES('$kode_petugas','$nama','$jk','$jabatan','$telpon','$alamat','$jam_tugas')");
    // header('location: page/petugas/petugas.php', true);
    header("Refresh:0; url='http://localhost/perpus/?page=petugas'");
    // exit;
        // Show message when user added
        // echo "petugas berhasil tambahkan <a href='?=page=petugas'>lihat petugas</a>";
    }

?>