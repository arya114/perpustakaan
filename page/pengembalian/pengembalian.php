<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Pengembalian
                        </div>
                        <div class="panel-body">
                        <a href="?page=pengembalian&aksi=tambah" class="btn btn-success">Tambah Data</a>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Kembali</th>
                                            <th>Tanggal Pengembalian</th>
                                            <th>Jatuh Tempo</th>
                                            <th>Denda</th>
                                            <th>Jumlah Hari</th>
                                            <th>Jumlah Denda</th>
                                            <th>Kode Buku</th>
                                            <th>Kode Anggota</th>
                                            <th>Kode Petugas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no = 1;

                                            $sql = $koneksi->query("select  * from pengembalian" );
                                            while ($data=$sql->fetch_assoc()) {
                                            

                                        ?>

                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['kode_pengembalian'];?></td>
                                            <td><?php echo $data['tanggal_pengembalian'];?></td>
                                            <td><?php echo $data['jatuh_tempo'];?></td>
                                            <td><?php echo $data['denda'];?></td>
                                            <td><?php echo $data['jumlah_hari'];?></td>
                                            <td><?php echo $data['jumlah_denda'];?></td>
                                            <td><?php echo $data['kode_buku'];?></td>
                                            <td><?php echo $data['kode_anggota'];?></td>
                                            <td><?php echo $data['kode_petugas'];?></td>
                                            <td>
                                                <a href="?page=pengembalian&aksi=ubah&kode_pengembalian=<?= $data['kode_pengembalian']?>" class="btn btn-primary" title="Ubah"><span class="fa fa-pencil"></span></a>
                                                <a href="?page=pengembalian&aksi=hapus&kode_pengembalian=<?= $data['kode_pengembalian']?>" class="btn btn-danger" title="Hapus"><span class="fa fa-trash-o"></span></a>
                                            </td>   
                                        </tr>


                                        <?php } ?>
                                    <tbody>