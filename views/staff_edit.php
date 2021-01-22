<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM staff WHERE id='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Staff</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Staff</label>
                             <div class="col-sm-9">
								<input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="Nama" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                             <div class="col-sm-9">
								<input type="text" name="alamat" value="<?=$data['alamat']?>"class="form-control" id="inputEmail3" placeholder="Alamat" required>
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label for="jenis_kelamin" class="col-sm-3 control-label">Jenis Kelamin</label>
                             <div class="col-sm-9">
								<input type="text" name="jenis_kelamin" value="<?=$data['jenis_kelamin']?>"class="form-control" id="inputEmail3" placeholder="Jenis Kelamin" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tgl_lahir" class="col-sm-3 control-label">Tanggal Lahhir</label>
                             <div class="col-sm-3">
								<input type="date" name="tgl_lahir" value="<?=$data['tgl_lahir']?>"class="form-control" id="inputEmail3" placeholder="Tanggal Lahir" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data</button>
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
    $n=$_POST['nama'];
	$a=$_POST['alamat'];
	$j =$_POST['jenis_kelamin'];
	$t =$_POST['tgl_lahir'];

    //buat sql
    $sql="UPDATE staff SET nama = '$n', alamat='$a', jenis_kelamin='$j', tgl_lahir='$t' WHERE id='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=staff&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
}

?>



