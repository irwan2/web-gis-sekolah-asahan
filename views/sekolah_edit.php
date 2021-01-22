<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_sekolah WHERE id_sekolah ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class=" col-sm-7">
  <div class="panel panel-success">
      <div class="panel-heading">
     Lokasi Sekolah
       </div>
      
      <div class="panel-body">
      <div id="mapid" style=" height: 500px;"></div>
      <script>


var mymap = L.map('mapid').setView([<?= $data['latitude'] ?>, <?= $data['longitude'] ?>], 13);

var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
   
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    id: 'mapbox/streets-v11'

});

var peta2 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
   
   attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
       '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
       'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
   id: 'mapbox/satellite-v9'

});

var peta3 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
	
    });
var peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/dark-v10'
	    
}).addTo(mymap);

var baseLayers = {
		"Peta1": peta1,
		"Peta2": peta2,
        "Peta3": peta3,
        "Peta4": peta4
	};
    L.control.layers(baseLayers).addTo(mymap);   



//lokasi get cordinat
var latInput = document.querySelector("[name=latitude]");
var latInput = document.querySelector("[name=longitude]");

var curLocation = [<?= $data['latitude'] ?>, <?= $data['longitude'] ?>];

mymap.attributionControl.setPrefix(false);

var marker = new L.marker(curLocation, {
    draggable: 'true'
});

marker.on('dragend', function(event) {
    var position = marker.getLatLng();
    marker.setLatLng(position, {
        draggable: 'true'
    }).bindPopup(position).update();
    $("#latitude").val(position.lat);
    $("#longitude").val(position.lng).keyup();
});

mymap.addLayer(marker);

mymap.on("click", function(e) {
    var lat = e.latlng.lat;
    var lng = e.latlng.lng;
    if (!marker) {
        marker = L.marker(e.latlng).addTo(mymap);
    } else {
        marker.setLatLng(e.latlng);
    }
    latInput.value = lat;
    lngInput.value = lng;
    
});  

    </script>

     </div>
  </div>
</div>
   
        <div class="col-sm-5">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Edit Data Sekolah</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk Edit data-->
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                        
						 <div class="form-group">
                            <label for="nama_sekolah" class="col-sm-3 control-label">Nama Sekolah</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama_sekolah" value="<?=$data['nama_sekolah']?>" class="form-control"  placeholder="Nama Sekolah" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>" class="form-control" placeholder="Alamat" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="status_sekolah" class="col-sm-3 control-label">Status Sekolah</label>
                               <div class="col-xs-9">
                                <select name="status_sekolah" class="form-control">
                                    <option value="<?= $data['status_sekolah'] ?>"><?= $data['status_sekolah'] ?> </option>
                                    <option value="Pilih">--Pilih Status Sekolah--</option>
                                    <option value="Negeri">Negeri</option>
                                    <option value="Swasta">Swasta</option>
                                </select>
                            </div>
                        </div>

						 <div class="form-group">
                            <label for="kepala_sekolah" class="col-sm-3 control-label">Kepala Sekolah</label>
                            <div class="col-sm-9">
                                <input type="text" name="kepala_sekolah" value="<?=$data['kepala_sekolah']?>" class="form-control"  placeholder="Kepala Sekolah" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="latitude" class="col-sm-3 control-label">Latitude</label>
                            <div class="col-sm-9">
                                <input id="latitude" type="text" name="latitude"  value="<?=$data['latitude']?>" class="form-control"  placeholder="Latitude" readonly />
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="longitude" class="col-sm-3 control-label">Longitude</label>
                            <div class="col-sm-9">
                                <input id="longitude" type="text" name="longitude" value="<?=$data['longitude']?>" class="form-control"  placeholder="Longitude" readonly />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tgl_berdiri" class="col-sm-3 control-label">Tanggal Berdiri</label>
                            <div class="col-sm-6">
                                <input type="date" name="tgl_berdiri" value="<?=$data['tgl_berdiri']?>" class="form-control"  placeholder="Tanggal Berdiri" required>
                            </div>
                        </div>
                        <tr><center>
                        <td><img src="./img/<?= $data['gambar'] ?>" style='width:100px;'></td>
                        </center></br></tr>
						
                         <div class="form-group"><center>
                             <label for="gambar" class="col-sm-3 control-label">Gambar</label></center>
                             <div class="col-sm-9">
                                <input type="file" name="gambar"  value="<?=$data['gambar']?>" class="form-control" placeholder="Gambar">
                             </div>   
                         </div>
                         
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" name="simpan">
                                    <span class=""></span> Simpan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=sekolah&actions=tampil" class="btn btn-danger btn-sm">
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
  
    $nama_sekolah=$_POST['nama_sekolah'];
	$alamat=$_POST['alamat'];
	$status_sekolah=$_POST['status_sekolah'];
	$kepala_sekolah=$_POST['kepala_sekolah'];
    $latitude=$_POST['latitude'];
	$longitude=$_POST['longitude'];
    $ber=$_POST['tgl_berdiri'];
    
    $gambar= $_FILES['gambar']['name'];
    $filename = $_FILES['gambar']['tmp_name'];
    $dest = "img/".$_FILES['gambar']['name'];
    move_uploaded_file($filename, $dest); 

    //buat sql
    $sql="UPDATE tbl_sekolah SET nama_sekolah='$nama_sekolah',alamat='$alamat',status_sekolah='$status_sekolah',kepala_sekolah='$kepala_sekolah',latitude='$latitude',
	longitude='$longitude',tgl_berdiri='$ber',gambar='$gambar' WHERE id_sekolah ='$id'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=sekolah&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
}

?>



