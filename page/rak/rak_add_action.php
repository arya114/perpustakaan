<?php

    $koneksi = new mysqli ("localhost","root","","db_perpustakaann");

    if(isset($_POST['Submit'])) {
        $kode_rak = $_POST['kode_rak'];
        $nama_rak = $_POST['nama_rak'];
        $kode_buku = $_POST['kode_buku'];
                
        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO rak(kode_rak,nama_rak,kode_buku) VALUES('$kode_rak','$nama_rak','$kode_buku')");
    // header('location: page/rak/rak.php', true);
    header("Refresh:0; url='http://localhost/perpus/?page=rak'");
    // exit;
        // Show message when user added
        // echo "rak berhasil tambahkan <a href='?=page=rak'>lihat rak</a>";
    }

?>