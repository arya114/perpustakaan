
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Anggota
            </div>
            <div class="panel-body">
    
    <form name="update_user" method="post" action="page/anggota/anggota_edit_action.php">
        <table border="0">
            <tr> 
            <tr> 
                        <td>nama</td>
                            <td><input type="text" name="nama" class="form-control"></td>
                        </tr>
                        <tr> 
                            <td>jenis kelamin</td>
                            <td><input type="text" name="jk" class="form-control"></td>
                        </tr>
                        <tr> 
                            <td>jurusan</td>
                            <td><input type="text" name="jurusan" class="form-control"></td>
                        </tr>
                        <tr> 
                            <td>angkatan</td>
                            <td><input type="text" name="angkatan" class="form-control"></td>
                        </tr>
                        <tr> 
                            <td>alamat</td>
                            <td><input type="text" name="alamat" class="form-control"></td>
                        </tr>
                        <tr>  
                <td><input type="hidden" name="kode_anggota" value=<?php echo $_GET['kode_anggota'];?>></td>
                <td><input type="submit" name="update" value="update"></td>
            </tr>
        </table>
    </form>
</body>
</html>