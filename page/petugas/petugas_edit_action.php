<?php
// include database connection file
$koneksi = new mysqli ("localhost","root","","db_perpustakaann");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{    
    $kode_petugas = $_POST['kode_petugas'];
    
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $jabatan = $_POST['jabatan'];
        $telp = $_POST['telp'];
        $alamat = $_POST['alamat'];
        $jam_tugas = $_POST['jam_tugas'];
        
    // update user data
    $result = mysqli_query($koneksi, "UPDATE petugas SET nama='$nama',jk='$jk',jabatan='$jabatan',telp='$telp',alamat='$alamat',jam_tugas='$jam_tugas' WHERE kode_petugas=$kode_petugas");
    
    // Redirect to homepage to display updated user in list
    header("Refresh:0; url='http://localhost/perpus/?page=petugas'"); 
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$kode_petugas = $_POST['kode_petugas'];
 
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM petugas WHERE kode_petugas=$kode_petugas");
 
while($kode_petugas = mysqli_fetch_array($result))
{
        $nama = $kode_petugas['nama'];
        $jk = $kode_petugas['jk'];
        $jabatan = $kode_petugas['jabatan'];
        $telp = $kode_petugas['telp'];
        $alamat = $kode_petugas['alamat'];
        $jam_tugas = $kode_petugas['jam_tugas'];
}
?>