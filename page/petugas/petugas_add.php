<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                    Data Petugas
            </div>
            <div class="panel-body">
                <!-- <a href="petugas_add.php" class="btn btn-success">Tambah Data</a> -->
                <form action="page/petugas/petugas_add_action.php" method="post" name="form1">
                    <table width="25%" border="0">
                        <tr> 
                            <td>Kode Petugas</td>
                            <td><input type="text" name="kode_petugas" class="form-control"></td>
                        </tr>
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
                            <td><input type="text" name="telpon" class="form-control"></td>
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
                            <td></td>
                            <td><input type="submit" name="Submit" value="Add"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>