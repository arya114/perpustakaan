<?php

$koneksi = new mysqli ("localhost","root","","db_perpustakaann");

if(isset($_POST['Submit'])) {
        $kode_anggota = $_POST['kode_anggota'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $jurusan = $_POST['jurusan'];
        $angkatan = $_POST['angkatan'];
        $alamat = $_POST['alamat'];
    
            
    // Insert user data into table
    $result = mysqli_query($koneksi, "INSERT INTO anggota(kode_anggota,nama,jk,jurusan,angkatan,alamat) VALUES('$kode_anggota','$nama','$jk','$jurusan','$angkatan','$alamat')");
// header('location: page/anggota/anggota.php', true);
header("Refresh:0; url='http://localhost/perpus/?page=anggota'");
// exit;
    // Show message when user added
    echo "anggota berhasil tambahkan <a href='?=page=anggota'>lihat anggota</a>";
}

?>