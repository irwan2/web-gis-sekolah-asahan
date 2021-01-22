<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Customer</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                    <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Staff</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama Staff" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Alamat" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_kelamin" class="form-control" id="inputEmail3" placeholder="Jenis Kelamin" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tgl_lahir" class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_lahir" class="form-control" id="inputEmail3" placeholder="Tanggal Lahir" required>
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=staff&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jekel=$_POST['jenis_kelamin'];
    $t=$_POST['tgl_lahir'];
	
     
    //buat sql
      $sql="INSERT INTO staff VALUES ('','$nama','$alamat','$jekel','$t')";
      $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Staff Error");
      if ($query){
          echo "<script>window.location.assign('?page=staff&actions=tampil');</script>";
      }else{
          echo "<script>alert('Simpan Data Gagal');<script>";
      }
}
  
  ?>
