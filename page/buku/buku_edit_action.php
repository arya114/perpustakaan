<?php
// include database connection file
$koneksi = new mysqli ("localhost","root","","db_perpustakaann");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{    
    $kode_buku = $_POST['kode_buku'];
    
        $judul_buku = $_POST['judul_buku'];
        $penulis = $_POST['penulis'];
        $penerbit = $_POST['penerbit'];
        $tahun_terbit = $_POST['tahun_terbit'];

    // update user data
    $result = mysqli_query($koneksi, "UPDATE buku SET kode_buku='$kode_buku',judul_buku='$judul_buku',penulis='$penulis',penerbit='$penerbit',tahun_terbit='$tahun_terbit' WHERE kode_buku=$kode_buku");
    
    // Redirect to homepage to display updated user in list
    header("Refresh:0; url='http://localhost/perpus/?page=buku'"); 
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$kode_buku = $_POST['kode_buku'];
 
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM buku WHERE kode_buku=$kode_buku");
 
while($kode_buku = mysqli_fetch_array($result))
{
        $judul_buku = $kode_buku['judul_buku'];
        $penulis = $kode_buku['penulis'];
        $penerbit = $kode_buku['penerbit'];
        $tahun_terbit = $kode_buku['tahun_terbit'];
}
?>