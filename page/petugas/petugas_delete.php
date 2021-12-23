<?php
$koneksi = new mysqli ("localhost","root","","db_perpustakaann");
 
// Get id from URL to delete that user
$kode_petugas = $_GET['kode_petugas'];
 
// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM petugas WHERE kode_petugas='$kode_petugas'");

 
header("Refresh:0; url='http://localhost/perpus/?page=petugas'");                                                            

?>