<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Staff</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM staff WHERE id='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
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
                        
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=staff&actions=tampil" class="btn btn-success btn-sm">
                        Kembali </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

