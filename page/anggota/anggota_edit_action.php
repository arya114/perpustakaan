<?php
// include database connection file
$koneksi = new mysqli ("localhost","root","","db_perpustakaann");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{    
    $kode_anggota = $_POST['kode_anggota'];
    
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $jurusan = $_POST['jurusan'];
        $angkatan = $_POST['angkatan'];
        $alamat = $_POST['alamat'];
        
    // update user data
    $result = mysqli_query($koneksi, "UPDATE anggota SET nama='$nama',jk='$jk',jurusan='$jurusan',angkatan='$angkatan',alamat='$alamat' WHERE kode_anggota=$kode_anggota");
    
    // Redirect to homepage to display updated user in list
    header("Refresh:0; url='http://localhost/perpus/?page=anggota'"); 
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$kode_anggota = $_POST['kode_anggota'];
 
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM anggota WHERE kode_anggota=$kode_anggota");
 
while($kode_anggota = mysqli_fetch_array($result))
{
        $nama = $kode_anggota['nama'];
        $jk = $kode_anggota['jk'];
        $jurusan = $kode_anggota['jurusan'];
        $angkatan = $kode_anggota['angkatan'];
        $alamat = $kode_anggota['alamat'];
}
?>