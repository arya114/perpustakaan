<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Peminjaman
                        </div>
                        <div class="panel-body">
                        <a href="?page=peminjaman&aksi=tambah" class="btn btn-success">Tambah Data</a>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Peminjaman</th>
                                            <th>Tanggal Pinjam</th>
                                            <th>Tanggal Kembali</th>
                                            <th>Kode Buku</th>
                                            <th>Kode Anggota</th>
                                            <th>Kode Petugas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no = 1; 

                                            $sql = $koneksi->query("select  * from peminjaman" );
                                            while ($data=$sql->fetch_assoc()) {
                                            

                                        ?>

                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['kode_peminjaman'];?></td>
                                            <td><?php echo $data['tanggal_pinjam'];?></td>
                                            <td><?php echo $data['tanggal_kembali'];?></td>
                                            <td><?php echo $data['kode_buku'];?></td>
                                            <td><?php echo $data['kode_anggota'];?></td>
                                            <td><?php echo $data['kode_petugas'];?></td>
                                            <td>
                                                <a href="?page=peminjaman&aksi=ubah&kode_peminjaman=<?= $data['kode_peminjaman']?>" class="btn btn-primary" title="Ubah"><span class="fa fa-pencil"></span></a>
                                                <a href="?page=peminjaman&aksi=hapus&kode_peminjaman=<?= $data['kode_peminjaman']?>" class="btn btn-danger" title="Hapus"><span class="fa fa-trash-o"></span></a>
                                            </td>   
                                        </tr>

                                        <?php } ?>
                                    <tbody>