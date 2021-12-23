<?php
// include database connection file
$koneksi = new mysqli ("localhost","root","","db_perpustakaann");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{    
    $kode_rak = $_POST['kode_rak'];
    
        $nama_rak = $_POST['nama_rak'];
        
    // update user data
    $result = mysqli_query($koneksi, "UPDATE rak SET nama_rak='$nama_rak' WHERE kode_rak=$kode_rak");
    
    // Redirect to homepage to display updated user in list
    header("Refresh:0; url='http://localhost/perpus/?page=rak'"); 
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$kode_rak = $_POST['kode_rak'];
 
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM rak WHERE kode_rak=$kode_rak");
 
while($kode_rak = mysqli_fetch_array($result))
{
        $nama_rak = $kode_rak['nama_rak'];
}
?>