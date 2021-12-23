<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Rak
                        </div>
                        <div class="panel-body">
                        <a href="?page=rak&aksi=tambah" class="btn btn-success">Tambah Data</a>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Rak</th>
                                            <th>Nama Rak</th>
                                            <th>Kode Buku</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no = 1;

                                            $sql = $koneksi->query("select  * from rak" );
                                            while ($data=$sql->fetch_assoc()) {
                                            

                                        ?>

                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['kode_rak'];?></td>
                                            <td><?php echo $data['nama_rak'];?></td>
                                            <td><?php echo $data['kode_buku'];?></td>
                                            <td>
                                                <a href="?page=rak&aksi=ubah&kode_rak=<?= $data['kode_rak']?>" class="btn btn-primary" title="Ubah"><span class="fa fa-pencil"></span></a>
                                                <a href="?page=rak&aksi=hapus&kode_rak=<?= $data['kode_rak']?>" class="btn btn-danger" title="Hapus"><span class="fa fa-trash-o"></span></a>
                                            </td> 
                                        </tr>

                                        <?php } ?>
                                    <tbody>