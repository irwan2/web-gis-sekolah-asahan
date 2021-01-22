<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Sekolah</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Geografis Sekolah Kabupaten Asahan </h2>
                        
                        <hr>
                        <h3>DATA SELURUH SEKOLAH</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
                                <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama Sekolah</th>
                            <th class="text-center">Alamat</th>
                            <th class="text-center">Status Sekolah</th>
                            <th class="text-center">Kepala Sekolah</th>
                            <th class="text-center">Latitude</th>
                            <th class="text-center">Longitude</th>
                            <th class="text-center">Tanggal Berdiri</th>
                            <th class="text-center">Gambar</th>
                            
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
                                    <td><img src="../img/<?= $data['gambar'] ?>" style='width:80px;'></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="9" class="text-right">
                                        Asahan  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>H.Surya <strong></u><br>
                                        NIP.102871291416712
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>