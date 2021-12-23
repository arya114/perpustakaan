<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                   Buku
            </div>
            <div class="panel-body">
                <!-- <a href="buku_add.php" class="btn btn-success">Tambah Data</a> -->
                <form action="page/buku/buku_add_action.php" method="post" name="form1">
                    <table width="25%" border="0">
                        <tr> 
                            <td>Kode Buku</td>
                            <td><input type="text" name="kode_buku" class="form-control"></td>
                        </tr>
                        <tr> 
                            <td>Judul Buku</td>
                            <td><input type="text" name="judul_buku" class="form-control"></td>
                        </tr>
                        <tr> 
                            <td>Penulis</td>
                            <td><input type="text" name="penulis" class="form-control"></td>
                        </tr>
                        <tr> 
                            <td>Penerbit</td>
                            <td><input type="text" name="penerbit" class="form-control"></td>
                        </tr>
                        <tr> 
                            <td>Tahun Terbit</td>
                            <td><input type="text" name="tahun_terbit" class="form-control"></td>
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