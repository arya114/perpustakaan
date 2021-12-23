<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                    Data Anggota
            </div>
            <div class="panel-body">
                <!-- <a href="anggota_add.php" class="btn btn-success">Tambah Data</a> -->
                <form action="page/anggota/anggota_add_action.php" method="post" name="form1">
                    <table width="25%" border="0">
                        <tr> 
                            <td>Kode Anggota</td>
                            <td><input type="text" name="kode_anggota" class="form-control"></td>
                        </tr>
                        <tr> 
                            <td>Nama</td>
                            <td><input type="text" name="nama" class="form-control"></td>
                        </tr>
                        <tr> 
                            <td>Jenis Kelamin</td>
                            <td><input type="text" name="jk" class="form-control"></td>
                        </tr>
                        <tr> 
                            <td>Jurusan</td>
                            <td><input type="text" name="jurusan" class="form-control"></td>
                        </tr>
                        <tr> 
                            <td>Angkatan</td>
                            <td><input type="text" name="angkatan" class="form-control"></td>
                        </tr>
                        <tr> 
                            <td>Alamat</td>
                            <td><input type="text" name="alamat" class="form-control"></td>
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