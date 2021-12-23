
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Ubah
            </div>
            <div class="panel-body">
    
    <form name="update_user" method="post" action="page/rak/rak_edit_action.php">
        <table border="0">
                        <tr> 
                        <tr> 
                        <td>Nama Rak</td>
                            <td><input type="text" name="nama_rak" class="form-control"></td>
                        </tr>
                        <tr>  
                <td><input type="hidden" name="kode_rak" value=<?php echo $_GET['kode_rak'];?>></td>
                <td><input type="submit" name="update" value="update"></td>
            </tr>
        </table>
    </form>
</body>
</html>