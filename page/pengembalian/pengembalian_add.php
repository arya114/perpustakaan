<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Pengembalian
            </div>
            <div class="panel-body">
                <!-- <a href="pengembalian_add.php" class="btn btn-success">Tambah Data</a> -->
                <form action="page/pengembalian/pengembalian_add_action.php" method="post" name="form1">
                    <table width="25%" border="0">
                        <tr> 
                            <td>kode pengembalian</td>
                            <td><input type="text" name="kode_pengembalian" class="form-control"></td>
                        </tr>
                        <tr> 
                            <td>tanggal pengembalian</td>
                            <td><input type="text" name="tanggal_pengembalian" class="form-control"></td>
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
                            <td>kode buku</td>
                            <td><input type="text" name="kode_buku" class="form-control"></td>
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
                            <td></td>
                            <td><input type="submit" name="Submit" value="Add"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>