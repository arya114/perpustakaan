
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                pengembalian
            </div>
            <div class="panel-body">
    
    <form name="update_user" method="post" action="page/pengembalian/pengembalian_edit_action.php">
        <table border="0">
                        <tr> 
                            <td>tanggal pengembalian</td>
                            <td><input type="text" name="tanggal_pengembalian" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>kode buku</td>
                            <td><input type="text" name="kode_buku" class="form-control"></td>
                        </tr>
                        <tr> 
                            <td>jatuh tempo</td>
                            <td><input type="text" name="jatuh_tempo" class="form-control"></td>
                        </tr>
                        <tr> 
                            <td>denda</td>
                            <td><input type="text" name="denda" class="form-control"></td>
                        </tr>
                        <tr> 
                            <td>jumlah hari</td>
                            <td><input type="text" name="jumlah_hari" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>jumlah denda</td>
                            <td><input type="text" name="jumlah_denda" class="form-control"></td>
                        </tr>
                        <tr> 
                            <td>kode anggota</td>
                            <td><input type="text" name="kode_anggota" class="form-control"></td>
                        </tr>
                        <tr> 
                            <td>kode petugas</td>
                            <td><input type="text" name="kode_petugas" class="form-control"></td>
                        </tr>
                        <tr> 
                <td><input type="hidden" name="kode_pengembalian" value=<?php echo $_GET['kode_pengembalian'];?>></td>
                <td><input type="submit" name="update" value="update"></td>
            </tr>
        </table>
    </form>
</body>
</html>