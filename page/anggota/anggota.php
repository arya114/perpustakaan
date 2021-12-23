<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Anggota
                        </div>
                        <div class="panel-body">
                        <a href="?page=anggota&aksi=tambah" class="btn btn-success">Tambah Data</a>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Anggota</th>
                                            <th>Nama</th>
                                            <th>JK</th>
                                            <th>Jurusan</th>
                                            <th>Angkatan</th>
                                            <th>Alamat</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no = 1;

                                            $sql = $koneksi->query("select  * from anggota" );
                                            while ($data=$sql->fetch_assoc()) {
                                            

                                        ?>

                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['kode_anggota'];?></td>
                                            <td><?php echo $data['nama'];?></td>
                                            <td><?php echo $data['jk'];?></td>
                                            <td><?php echo $data['jurusan'];?></td>
                                            <td><?php echo $data['angkatan'];?></td>
                                            <td><?php echo $data['alamat'];?></td>
                                            <td>
                                                <a href="?page=anggota&aksi=ubah&kode_anggota=<?= $data['kode_anggota']?>" class="btn btn-primary" title="Ubah"><span class="fa fa-pencil"></span></a>
                                                <a href="?page=anggota&aksi=hapus&kode_anggota=<?= $data['kode_anggota']?>" class="btn btn-danger" title="Hapus"><span class="fa fa-trash-o"></span></a>    
                                            <td>

                                        </tr>


                                        <?php } ?>
                                    <tbody>