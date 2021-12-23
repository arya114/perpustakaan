<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                   Peminjaman
            </div>
            <div class="panel-body">
                <!-- <a href="peminjaman_add.php" class="btn btn-success">Tambah Data</a> -->
                <form action="page/peminjaman/peminjaman_add_action.php" method="post" name="form1">
                    <table width="25%" border="0">
                        <tr> 
                            <td>kode peminjaman</td>
                            <td><input type="text" name="kode_peminjaman" class="form-control"></td>
                        </tr>
                        <tr> 
                            <td>tanggal pinjam</td>
                            <td><input type="text" name="tanggal_pinjam" class="form-control"></td>
                        </tr>
                        <tr> 
                            <td>tanggal kembali</td>
                            <td><input type="text" name="tanggal_kembali" class="form-control"></td>
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