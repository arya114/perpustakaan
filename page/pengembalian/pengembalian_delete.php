<?php
$koneksi = new mysqli ("localhost","root","","db_perpustakaann");
 
// Get id from URL to delete that user
$kode_pengembalian = $_GET['kode_pengembalian'];
 
// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM pengembalian WHERE kode_pengembalian='$kode_pengembalian'");

 
header("Refresh:0; url='http://localhost/perpus/?page=pengembalian'");                                                            

?>