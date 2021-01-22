<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class=""></span> Kelola User</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>

                        </thead>
                        <tbody>
                          <tr>
                              <th>No.</th><th>username</th><th>Email</th><th>Nama</th><th>Level</th><th>Keterangan</th><th>AKSI</th>
                          </tr>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM user";
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
									<td><?= $data['username'] ?></td>
					
								    <td><?= $data['email'] ?></td>
                                   <td><?= $data['nama'] ?> </td>
                                   <td><?= $data['level'] ?> </td>
                                   <td><?= $data['ket'] ?> </td>
                                    <td>
                                    <a href="?page=user&actions=detail&id=<?= $data['username'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"></span>
                                        </a>

                                        <a href="?page=user&actions=edit&id=<?= $data['username'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                        </a>
                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                            <tfoot>
                            
                        </tfoot>
                        </tbody>

                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
