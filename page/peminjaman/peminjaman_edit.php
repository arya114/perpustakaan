
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Ubah
            </div>
            <div class="panel-body">
    
    <form name="update_user" method="post" action="page/peminjaman/peminjaman_edit_action.php">
        <table border="0">
            <tr> 
            <tr> 
                        <td>Tanggal Pinjam</td>
                            <td><input type="text" name="tanggal_pinjam" class="form-control"></td>
                        </tr>
                        <tr> 
                            <td>Tanggal Kembali</td>
                            <td><input type="text" name="tanggal_kembali" class="form-control"></td>
                        </tr>
                        <tr>  
                <td><input type="hidden" name="kode_peminjaman" value=<?php echo $_GET['kode_peminjaman'];?>></td>
                <td><input type="submit" name="update" value="update"></td>
            </tr>
        </table>
    </form>
</body>
</html>