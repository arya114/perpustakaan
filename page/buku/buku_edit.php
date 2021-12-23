
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Ubah
            </div>
            <div class="panel-body">
    
    <form name="update_user" method="post" action="page/buku/buku_edit_action.php">
        <table border="0">
            <tr> 
            <tr> 
                            <td>Judul Buku</td>
                            <td><input type="text" name="judul_buku" class="form-control"></td>
                        </tr>
                        <tr> 
                            <td>penulis</td>
                            <td><input type="text" name="penulis" class="form-control"></td>
                        </tr>
                        <tr> 
                            <td>penerbit</td>
                            <td><input type="text" name="penerbit" class="form-control"></td>
                        </tr>
                        <tr> 
                            <td>tahun terbit</td>
                            <td><input type="text" name="tahun_terbit" class="form-control"></td>
                        </tr>
                        <tr> 
                <td><input type="hidden" name="kode_buku" value=<?php echo $_GET['kode_buku'];?>></td>
                <td><input type="submit" name="update" value="update"></td>
            </tr>
        </table>
    </form>
</body>
</html>