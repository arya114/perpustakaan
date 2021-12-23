
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Ubah
            </div>
            <div class="panel-body">
    
    <form name="update_user" method="post" action="page/petugas/petugas_edit_action.php">
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
                            <td>jabatan</td>
                            <td><input type="text" name="jabatan" class="form-control"></td>
                        </tr>
                        <tr> 
                            <td>telpon</td>
                            <td><input type="text" name="telp" class="form-control"></td>
                        </tr>
                        <tr> 
                            <td>alamat</td>
                            <td><input type="text" name="alamat" class="form-control"></td>
                        </tr>
                        <tr> 
                            <td>jam tugas</td>
                            <td><input type="text" name="jam_tugas" class="form-control"></td>
                        </tr>
                        <tr> 
                <td><input type="hidden" name="kode_petugas" value=<?php echo $_GET['kode_petugas'];?>></td>
                <td><input type="submit" name="update" value="update"></td>
            </tr>
        </table>
    </form>
</body>
</html>