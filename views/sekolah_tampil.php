<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";


}
?>


<div class="container">
    <div class="row">
        <div class="col-xs-14">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class=""></span> Data Sekolah</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-responsive table-bordered">
                        <thead>
                            <tr>
                            <th>No</th>
                            <th>Nama Sekolah</th>
                            <th>Alamat</th>
                            <th>Status Sekolah</th>
                            <th>Kepala Sekolah</th>
                            <th>Latitude</th>
                            <th>Longitude</th>
                            <th>Tanggal Berdiri</th>
                            <th>Gambar</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_sekolah";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                               
                               
                               ?>
                                
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><?= $data['nama_sekolah'] ?></td>
									<td><?= $data['alamat'] ?></td>
									<td><?= $data['status_sekolah'] ?></td>
									<td><?= $data['kepala_sekolah'] ?></td>
                                    <td><?= $data['latitude'] ?></td>
                                    <td><?= $data['longitude'] ?></td>
                                    <td><?= $data['tgl_berdiri'] ?></td>
                                    <td><?="<img src='img/".$data['gambar']."' style='width:80px;'>"?></td>

                                                                        
                                    <td>
                                    
                                        <a href="?page=sekolah&actions=edit&id=<?= $data['id_sekolah'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                        </a>
										
                                        <a href="?page=sekolah&actions=delete&id=<?= $data['id_sekolah'] ?>" class="btn btn-danger btn-xs">
                                            <span class="fa fa-remove"></span>
                                        </a>
                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="10">
                                    <a href="?page=sekolah&actions=tambah" class="btn btn-info btn-sm">
                                        Tambah Sekolah

                                    </a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>