<?php
// include database connection file
$koneksi = new mysqli ("localhost","root","","db_perpustakaann");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{    
    $kode_pengembalian = $_POST['kode_pengembalian'];
    
        $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
        $kode_buku = $_POST['kode_buku'];
        $jatuh_tempo = $_POST['jatuh_tempo']; 
        $denda = $_POST['denda'];
        $jumlah_hari = $_POST['jumlah_hari'];
        $jumlah_denda = $_POST['jumlah_denda'];
        $kode_anggota = $_POST['kode_anggota'];
        $kode_petugas = $_POST['kode_petugas'];
            

        // update user data
     $result = mysqli_query($koneksi, "UPDATE pengembalian SET kode_pengembalian='$kode_pengembalian',tanggal_pengembalian='$tanggal_pengembalian',kode_buku='$kode_buku',jatuh_tempo='$jatuh_tempo',denda='$denda',jumlah_hari='$jumlah_hari',jumlah_denda='$jumlah_denda',kode_anggota='$kode_anggota',kode_petugas='$kode_petugas' WHERE kode_pengembalian=$kode_pengembalian");
    
     // Redirect to homepage to display updated user in list
     header("Refresh:0; url='http://localhost/perpus/?page=pengembalian'"); 
}
        ?>
        <?php
        // Display selected user data based on id
        // Getting id from url
        $kode_pengembalian = $_POST['kode_pengembalian'];
 
        // Fetech user data based on id
        $result = mysqli_query($koneksi, "SELECT * FROM pengembalian WHERE kode_pengembalian=$kode_pengembalian");
 
            while($kode_pengembalian = mysqli_fetch_array($result))
            {
   
            $tanggal_pengembalian = $kode_pengembalian['tanggal_pengembalian'];
            $jatuh_tempo = $kode_pengembalian['jatuh_tempo'];
            $denda = $kode_pengembalian['denda'];
            $jumlah_hari = $kode_pengembalian['jumlah_hari'];
            $umlah_denda = $kode_pengembalian['jumlah_denda'];
            $kode_anggota = $kode_pengembalian['kode_anggota'];
            $kode_petugas = $kode_pengembalian['kode_petugas'];
            }
?>