<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minumum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Terminal Bus Malang</title>
  
  <!-- font awesmoe cdn-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <!-- Scroll reveal Cdn -->
  <script src="https://unpkg.com/scrollreveal"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../style copy.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <!-- Javascript Block -->
  <script src='https://api.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.css' rel='stylesheet' />
   
  <script src='https://api.mapbox.com/mapbox.js/v3.3.1/mapbox.js'></script>
  <link href='https://api.mapbox.com/mapbox.js/v3.3.1/mapbox.css' rel='stylesheet' />

  <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.js'></script>
  <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.css' rel='stylesheet' />
</head>

<body>
  <?php require 'koneksi.php'; ?>
  <header>
    <div class="container">
      <nav class="nav">
        <div class="menu-toggle">
          <i class="fas fa-bars"></i>
          <i class="fas fa-times"></i>
        </div>
        <a href="#" class="logo"><img src="../image_bus/logo-bus.png" title="Ra-re logo"></a>
        <ul class="nav-list">

          <li class="nav-item">
            <a href="#" class="nav-link active"><b>Lokasi</b></a>
          </li>
          <li class="nav-item">
            <a href="admin2.php" class="nav-link"><b>Jadwal</b></a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <H4 class="lol">Logout</H4>
            </a>
          </li>

        </ul>

      </nav>
    </div>
  </header>
</br></br></br></br>
  <center style="height: 700px">
    <section>
      <a href="#tambahData">
        <button class="btn">Tambah Data</button>
      </a>
      <a href="#lihatdata">      
        <button class="btn">Lihat Data</button>
      </a>
    </br></br>
      <div id='map' style='height: 600px; width: 1200px;'></div>

      <?php
      $query="SELECT * FROM terminal";
      $sql=mysqli_query($koneksi, $query);
      ?>

        <script>
          L.mapbox.accessToken = 'pk.eyJ1Ijoic2hpbmppeWFzdWhpcm8iLCJhIjoiY2tuYjlramlzMXA1azJ3cWRzejQzOGZjeiJ9.RXrtLPb0t2CEpSK6QcD8Ag';
          var map = L.mapbox.map('map')
          .setView([-7.966620, 112.632632], 10)
          .addLayer(L.mapbox.styleLayer('mapbox://styles/mapbox/streets-v11'));

          var myLayer = L.mapbox.featureLayer().addTo(map);

          var geojson = {
              "type": "FeatureCollection",
              "features": [
                  <?php
                      while($row = mysqli_fetch_array($sql)) {
                          echo '{
                              "type": "Feature",
                              "properties": {
                                  "title": "'.$row['nama'].'",
                                  "marker-color": "#f86767",
                                  "marker-size": "large",
                                  "marker-symbol": "star"
                              },
                              "geometry": {
                                  "type": "Point",
                                  "coordinates": ['.$row['longitude'].','.$row['latitude'].']
                              }
                          },';
                      }
                  ?>
              ]
          };

          myLayer.setGeoJSON(geojson);
          // myLayer.on('click', function(e) {
          //     window.open(e.layer.feature.properties.url);
          // });
        </script>



      <div class="peta">
        <div id='map' style='height: 450px; width: 1130px;'></div>
        <?php
          $query="SELECT * FROM terminal";
          $sql=mysqli_query($koneksi, $query);
        ?>

      </div>
    </section>
  </center>
</br></br></br> </br></br></br>

  <center>
    <h2 id="lihatdata">Data Terminal</h2>
    <table border="1" class="animate-top" >
      <tr>
        <thead>
          <th>No</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Longitude</th>
          <th>Latitude</th>
          <th>Tipe</th>
          <th>Action</th>
        </thead>
      </tr>
      <tbody>
        <?php 
          $query_tampilSemua = "SELECT * FROM terminal";
          $sql_tS = mysqli_query($koneksi, $query_tampilSemua);

          while ($row1 = mysqli_fetch_array($sql_tS)) {?>
            <tr id="<?php echo $row1['id'];?>">
              <th><?php echo $row1['id']; ?></th>

              <td data-target="nama"><?php echo $row1['nama'];?></td>
              <td data-target="alamat"><?php echo $row1['alamat'];?></td>
              <td data-target="longitude"><?php echo $row1['longitude'];?></td>
              <td data-target="latitude"><?php echo $row1['latitude'];?></td>
              <td data-target="tipe"><?php echo $row1['tipe'];?></td>
              <td>
                <a class="btn btn-danger" href="proses_delete.php?id_del=<?php echo $row1['id'];?>"><img src="images/delete.png"></a>
                <a class="btn btn-dark" href="#" data-role="update" data-id="<?php echo $row1['id'];?>"><img src="images/edit.png"></a>
              </td>
            </tr>
          <?php }
        ?>
      </tbody>
    </table>
  </center>

  <center>
    <form method="POST" class="lol3" id="tambahData" style="margin-top: 6rem" action="http://localhost/Terminal2/Admin/function.php">

            <h2>Tambah Data Terminal</h2>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">ID</label>
              <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id">
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama lokasi</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama">
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Alamat</label><br>
              <textarea id="w3review" name="alamat" rows="4" cols="50">
              </textarea>
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Longitude</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="lng">
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Latitude</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="lat">
            </div>

            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tipe</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="tipe">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

          </form>
  </center>


  <!-- MODAL UPDATE -->
  <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title">Update Data Terminal</h3>
          </div>
          <div class="modal-body" style="font-size: 14px">
            <center>
                <div class="mb-3" style="">
                    <label class="form-label">ID</label>
                    <div class="col-sm-10">
                        <input type="text" name="id" id="id" class="form-control form-control-sm">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Terminal</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" id="nama" class="form-control form-control-sm">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" name="alamat" id="alamat" class="form-control form-control-sm">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Longitude</label>
                    <div class="col-sm-10">
                        <input type="text" name="longitude" id="longitude" class="form-control form-control-sm">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Latitude</label>
                    <div class="col-sm-10">
                        <input type="text" name="latitude" id="latitude" class="form-control form-control-sm">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tipe</label>
                    <div class="col-sm-10">
                        <input type="text" name="tipe" id="tipe" class="form-control form-control-sm">
                    </div>
                </div>
            </center>
          </div>
          
          <div class="modal-footer">
            <a href="#" id="save" class="btn btn-primary pull-right">Update</a>
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>


  <footer style="background-color: white"></footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>

<!-- Proses update -->
<script>
    $(document).ready(function () {
        // input value ng kolom input
        $(document).on('click', 'a[data-role=update]', function(){
            var id = $(this).data('id');
            var nama = $('#'+id).children('td[data-target=nama]').text();
            var alamat = $('#'+id).children('td[data-target=alamat]').text();
            var longitude = $('#'+id).children('td[data-target=longitude]').text();
            var latitude = $('#'+id).children('td[data-target=latitude]').text();
            var tipe = $('#'+id).children('td[data-target=tipe]').text();

            $('#id').val(id);
            $('#nama').val(nama);
            $('#alamat').val(alamat);
            $('#longitude').val(longitude);
            $('#latitude').val(latitude);
            $('#tipe').val(tipe);
            $('#myModal').modal('toggle');
        });

        $('#save').click(function(){
            var id = $('#id').val();
            var nama = $('#nama').val();
            var alamat = $('#alamat').val();
            var longitude = $('#longitude').val();
            var latitude = $('#latitude').val();
            var tipe = $('#tipe').val();

            $.ajax({
                url     : 'proses_update_terminal.php',
                method  : 'POST',
                data    : {id : id , nama : nama , alamat : alamat , longitude : longitude , latitude : latitude , tipe : tipe},
                success : function(response) {
                    $('#myModal').modal('hide');
                    window.location.reload();
                }
            });
        });

    });
</script>

</html>
