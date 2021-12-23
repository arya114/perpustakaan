<?php
$koneksi = new mysqli ("localhost","root","","db_perpustakaann");
 
// Get id from URL to delete that user
$kode_rak = $_GET['kode_rak'];
 
// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM rak WHERE kode_rak='$kode_rak'");

 
header("Refresh:0; url='http://localhost/perpus/?page=rak'");                                                            

?>