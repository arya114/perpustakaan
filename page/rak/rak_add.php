<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                    Rak
            </div>
            <div class="panel-body">
                <!-- <a href="rak_add.php" class="btn btn-success">Tambah Data</a> -->
                <form action="page/rak/rak_add_action.php" method="post" name="form1">
                    <table width="25%" border="0">
                        <tr> 
                            <td>Kode Rak</td>
                            <td><input type="text" name="kode_rak" class="form-control"></td>
                        </tr>
                        <tr> 
                            <td>Nama Rak</td>
                            <td><input type="text" name="nama_rak" class="form-control"></td>
                        </tr>
                        <tr> 
                            <td>Kode Buku</td>
                            <td><input type="text" name="kode_buku" class="form-control"></td>
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