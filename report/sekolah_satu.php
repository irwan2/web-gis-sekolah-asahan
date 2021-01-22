<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Sekolah</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_sekolah WHERE id_sekolah='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                    <h2>Sistem Informasi Geografis Sekolah Kabupaten Asahan </h2>
                        
                        <hr>
                        <h3>DATA SEKOLAH</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>Nama Sekolah</td> <td><?= $data['nama_sekolah'] ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                                </tr>
                                <tr>
                                    <td>Status Sekolah</td> <td><?= $data['status_sekolah'] ?> </td>
                                </tr>
                                <tr>
                                    <td>Kepala Sekolah</td> <td><?= $data['kepala_sekolah'] ?></td>
                                </tr>
								<tr>
                                    <td>Latitude</td> <td><?= $data['latitude'] ?></td>
                                </tr>
								<tr>
                                    <td>Longitude</td> <td><?= $data['longitude'] ?></td>
                                </tr>
								<tr>
                                    <td>Tanggal Berdiri</td> <td><?= $data['tgl_berdiri'] ?></td>
                                </tr>
                                <tr>
                                    <td>Gambar</td> <td><?="<img src='../img/".$data['gambar']."' style='width:80px;'>"?></td>
                                </tr>
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