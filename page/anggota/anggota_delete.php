<?php
$koneksi = new mysqli ("localhost","root","","db_perpustakaann");
 
// Get id from URL to delete that user
$kode_anggota = $_GET['kode_anggota'];
 
// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM anggota WHERE kode_anggota='$kode_anggota'");

 
header("Refresh:0; url='http://localhost/perpus/?page=anggota'");                                                            

?>