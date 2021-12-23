<?php
// include database connection file
$koneksi = new mysqli ("localhost","root","","db_perpustakaann");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{    
    $kode_peminjaman = $_POST['kode_peminjaman'];
    
        $tanggal_pinjam = $_POST['tanggal_pinjam'];
        $tanggal_kembali = $_POST['tanggal_kembali'];

    // update user data
    $result = mysqli_query($koneksi, "UPDATE peminjaman SET tanggal_pinjam='$tanggal_pinjam',tanggal_kembali='$tanggal_kembali' WHERE kode_peminjaman=$kode_peminjaman");
    
    // Redirect to homepage to display updated user in list
    header("Refresh:0; url='http://localhost/perpus/?page=peminjaman'"); 
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$kode_peminjaman = $_POST['kode_peminjaman'];
 
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE kode_peminjaman=$kode_peminjaman");
 
while($kode_peminjaman = mysqli_fetch_array($result))
{
        $tanggal_pinjam = $kode_peminjaman['tanggal_pinjam'];
        $tanggal_kembali = $kode_peminjaman['tanggal_kembali'];
}
?>