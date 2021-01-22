<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM user WHERE username ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class=""></span> Kelola User</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk Edit data-->
                    <form class="form-horizontal" action="" method="post">
                        
						 <div class="form-group">
                            <label for="username" class="col-sm-3 control-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" name="username" value="<?=$data['username']?>" class="form-control"   required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="paswd" class="col-sm-3 control-label">Paswd</label>
                            <div class="col-sm-9">
                                <input type="text" name="paswd" value="<?=$data['paswd']?>" class="form-control"  required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" name="email" value="<?=$data['email']?>" class="form-control"  required>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>" class="form-control"   required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="level" class="col-sm-3 control-label">Level</label>
                            <div class="col-sm-9">
                                <input id="level" type="text" name="level"  value="<?=$data['level']?>" class="form-control" required >
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input id="ket" type="text" name="ket" value="<?=$data['ket']?>" class="form-control"  required>
                            </div>
                        </div>

                   
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class=""></span> Simpan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=user&actions=tampil" class="btn btn-danger btn-sm">
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
  
    $username=$_POST['username'];
	$paswd=$_POST['paswd'];
	$email=$_POST['email'];
	$nama=$_POST['nama'];
    $level=$_POST['level'];
	$ket=$_POST['ket'];
    
    //buat sql
    $sql="UPDATE user SET username='$user',paswd='$paswd',email='$email',nama='$nama',level='$level',ket='$ket' WHERE id ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=user&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
}

?>



