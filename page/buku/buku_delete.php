<?php
$koneksi = new mysqli ("localhost","root","","db_perpustakaann");
 
// Get id from URL to delete that user
$kode_buku = $_GET['kode_buku'];
 
// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM buku WHERE kode_buku='$kode_buku'");

 
header("Refresh:0; url='http://localhost/perpus/?page=buku'");                                                            

?>