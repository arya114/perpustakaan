<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Buku
                        </div>
                        <div class="panel-body">
                        <a href="?page=buku&aksi=tambah" class="btn btn-success">Tambah Data</a>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Buku</th>
                                            <th>Judul</th>
                                            <th>Penulis</th>
                                            <th>Penerbit</th>
                                            <th>Tahun Terbit</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no = 1;

                                            $sql = $koneksi->query("select  * from buku" );
                                            while ($data=$sql->fetch_assoc()) {
                                            

                                        ?>

                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['kode_buku'];?></td>
                                            <td><?php echo $data['judul_buku'];?></td>
                                            <td><?php echo $data['penulis'];?></td>
                                            <td><?php echo $data['penerbit'];?></td>
                                            <td><?php echo $data['tahun_terbit'];?></td>
                                            <td>
                                                <a href="?page=buku&aksi=ubah&kode_buku=<?= $data['kode_buku']?>" class="btn btn-primary" title="Ubah"><span class="fa fa-pencil"></span></a>
                                                <a href="?page=buku&aksi=hapus&kode_buku=<?= $data['kode_buku']?>" class="btn btn-danger" title="Hapus"><span class="fa fa-trash-o"></span></a>
                                            </td>
                                            
                                        </tr>


                                        <?php } ?>
                                    <tbody>