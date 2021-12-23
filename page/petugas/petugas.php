<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Petugas
                        </div>
                        <div class="panel-body">
                        <a href="?page=petugas&aksi=tambah" class="btn btn-success">Tambah Data</a>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Petugas</th>
                                            <th>Nama</th>
                                            <th>JK</th>
                                            <th>Jabatan</th>
                                            <th>Telp</th>
                                            <th>Alamat</th>
                                            <th>Jam Tugas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no = 1;

                                            $sql = $koneksi->query("select  * from petugas" );
                                            while ($data=$sql->fetch_assoc()) {
                                            

                                        ?>

                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['kode_petugas'];?></td>
                                            <td><?php echo $data['nama'];?></td>
                                            <td><?php echo $data['jk'];?></td>
                                            <td><?php echo $data['jabatan'];?></td>
                                            <td><?php echo $data['telp'];?></td>
                                            <td><?php echo $data['alamat'];?></td>
                                            <td><?php echo $data['jam_tugas'];?></td>
                                            <td>
                                                <a href="?page=petugas&aksi=ubah&kode_petugas=<?= $data['kode_petugas']?>" class="btn btn-primary" title="Ubah"><span class="fa fa-pencil"></span></a>
                                                <a href="?page=petugas&aksi=hapus&kode_petugas=<?= $data['kode_petugas']?>" class="btn btn-danger" title="Hapus"><span class="fa fa-trash-o"></span></a>
                                            </td>   
                                            
                                        </tr>


                                        <?php } ?>
                                    <tbody>
