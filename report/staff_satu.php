<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Staff</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM staff WHERE id='" . $_GET ['id'] . "'";
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
                        <h3>DATA STAFF</h3>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
                            <tr>
                            <td>Nama Staff</td> <td><?= $data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td> <td><?= $data['jenis_kelamin'] ?></td>
                        </tr>
						<tr>
                            <td>Tanggal Lahir</td> <td><?= $data['tgl_lahir'] ?></td>
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
