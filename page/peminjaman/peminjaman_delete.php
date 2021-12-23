<?php
$koneksi = new mysqli ("localhost","root","","db_perpustakaann");
 
// Get id from URL to delete that user
$kode_peminjaman = $_GET['kode_peminjaman'];
 
// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM peminjaman WHERE kode_peminjaman='$kode_peminjaman'");

 
header("Refresh:0; url='http://localhost/perpus/?page=peminjaman'");                                                            

?>