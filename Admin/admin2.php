<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minumum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Admin Terminal Bus Malang</title>

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
	

</head>
<body>
	<?php require 'koneksi.php'; ?>

	<header style="position: relative;">
		<div class="container">
			<nav class="nav" style="font-size: 9px">
				<div class="menu-toggle">
					<i class="fas fa-bars"></i>
					<i class="fas fa-times"></i>
				</div>
				<a href="#" class="logo"><img src="../image_bus/logo-bus.png" title="Ra-re logo"></a>

				<ul class="nav-list">
					<li class="nav-item">
						<a href="admin.php" class="nav-link"><b>Lokasi</b></a>
					</li>
					<li class="nav-item">
						<a href="index_2.php" class="nav-link active"><b>Jadwal</b></a>
					</li>
					<li class="nav-item">
						<a href="logout.php" class="nav-link">
							<h4 class="lol">Logout</h4>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="container">
        <div class="row">
            <div class="col-4">
            </br></br></br></br>
                <h2>Tambah Jadwal</h2>
                <br>
                <form method="POST" action="http://localhost/Terminal2/Admin/proses.php">
                    <div class="mb-3">
                        <label class="form-label">ID</label>
                        <div class="col-sm-10">
                            <input type="text" name="id" class="form-control form-control-sm">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Terminal Asal</label>
                        <div class="col-sm-10">
                            <input type="text" name="id_terminal" class="form-control form-control-sm"> 
                            <!-- tolong gantino dropdown dong :'v , paham maksudku kan? yang keluar nanti nama terminalnya, tapi waktu di inputin kebacanya id terminalnya :'3 -->
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Operator</label>
                        <div class="col-sm-10">
                            <input type="text" name="operator" class="form-control form-control-sm">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kelas</label>
                        <div class="col-sm-10">
                            <input type="text" name="kelas" class="form-control form-control-sm">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jam Keberangkatan</label>
                        <div class="col-sm-10">
                            <input type="text" name="jam_berangkat" class="form-control form-control-sm">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jam Kedatangan</label>
                        <div class="col-sm-10">
                            <input type="text" name="jam_datang" class="form-control form-control-sm">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tujuan</label>
                        <div class="col-sm-10">
                            <input type="text" name="tujuan" class="form-control form-control-sm">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Waktu Tempuh</label>
                        <div class="col-sm-10">
                            <input type="text" name="waktu_tempuh" class="form-control form-control-sm">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Harga Tiket</label>
                        <div class="col-sm-10">
                            <input type="text" name="harga" class="form-control form-control-sm">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">SUBMIT</button>

                </form>
                
                </br>
            </div>
            <div class="col-8">
                </br></br>
                <table class="table" style="font-size: 14px">
                    <tr style="background-color: rgb(140, 139, 136);">
                        <th>ID</th>
                        <th>Terminal Asal</th>
                        <th>Operator</th>
                        <th>Kelas</th>
                        <th>Jam Keberangkatan</th>
                        <th>Jam Kedatangan</th>
                        <th>Tujuan</th>
                        <th>Waktu Tempuh</th>
                        <th>Harga Tiket</th>
                        <th>Action</th>
                    </tr>

                    <?php 
                    $query_tampilSemua = "SELECT * FROM jadwal_keberangkatan";
                    $sql_tS = mysqli_query($koneksi, $query_tampilSemua);

                    while ($row1 = mysqli_fetch_array($sql_tS)) {?>
                        <tr id="<?php echo $row1['id'];?>">
                            <th style="background-color: rgb(140, 139, 136)">
                                <?php echo $row1['id']; ?></th>

                            <td data-target="id_terminal"><?php echo $row1['id_terminal'];?></td>
                            <td data-target="operator"><?php echo $row1['operator'];?></td>
                            <td data-target="kelas"><?php echo $row1['kelas'];?></td>
                            <td data-target="jam_berangkat"><?php echo $row1['jam_berangkat'];?></td>
                            <td data-target="jam_datang"><?php echo $row1['jam_datang'];?></td>
                            <td data-target="tujuan"><?php echo $row1['tujuan'];?></td>
                            <td data-target="waktu_tempuh"><?php echo $row1['waktu_tempuh'];?></td>
                            <td data-target="harga"><?php echo $row1['harga'];?></td>
                            <td>
                                <a class="btn btn-danger" href="proses_delete_jadwal.php?id_del=<?php echo $row1['id'];?>"><img src="images/delete.png"></a>
                                <a class="btn btn-dark" href="#" data-role="update" data-id="<?php echo $row1['id'];?>"><img src="images/edit.png"></a>
                            </td>
                        </tr>
                   <?php }
                     ?>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title">Update Jadwal</h3>
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
                    <label class="form-label">Terminal Asal</label>
                    <div class="col-sm-10">
                        <input type="text" name="id_terminal" id="id_terminal" class="form-control form-control-sm"> 
                        <!-- tolong gantino dropdown dong :'v , paham maksudku kan? yang keluar nanti nama terminalnya, tapi waktu di inputin kebacanya id terminalnya :'3 -->
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Operator</label>
                    <div class="col-sm-10">
                        <input type="text" name="operator" id="operator" class="form-control form-control-sm">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Kelas</label>
                    <div class="col-sm-10">
                        <input type="text" name="kelas" id="kelas" class="form-control form-control-sm">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jam Keberangkatan</label>
                    <div class="col-sm-10">
                        <input type="text" name="jam_berangkat" id="jam_berangkat" class="form-control form-control-sm">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jam Kedatangan</label>
                    <div class="col-sm-10">
                        <input type="text" name="jam_datang" id="jam_datang" class="form-control form-control-sm">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tujuan</label>
                    <div class="col-sm-10">
                        <input type="text" name="tujuan" id="tujuan" class="form-control form-control-sm">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Waktu Tempuh</label>
                    <div class="col-sm-10">
                        <input type="text" name="waktu_tempuh" id="waktu_tempuh" class="form-control form-control-sm">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Harga Tiket</label>
                    <div class="col-sm-10">
                        <input type="text" name="harga" id="harga" class="form-control form-control-sm">
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

</body>

<script>
    $(document).ready(function () {
        // input value ng kolom input
        $(document).on('click', 'a[data-role=update]', function(){
            var id = $(this).data('id');
            var id_terminal = $('#'+id).children('td[data-target=id_terminal]').text();
            var operator = $('#'+id).children('td[data-target=operator]').text();
            var kelas = $('#'+id).children('td[data-target=kelas]').text();
            var jam_berangkat = $('#'+id).children('td[data-target=jam_berangkat]').text();
            var jam_datang = $('#'+id).children('td[data-target=jam_datang]').text();
            var tujuan = $('#'+id).children('td[data-target=tujuan]').text();
            var waktu_tempuh = $('#'+id).children('td[data-target=waktu_tempuh]').text();
            var harga = $('#'+id).children('td[data-target=harga]').text();

            $('#id').val(id);
            $('#id_terminal').val(id_terminal);
            $('#operator').val(operator);
            $('#kelas').val(kelas);
            $('#jam_berangkat').val(jam_berangkat);
            $('#jam_datang').val(jam_datang);
            $('#tujuan').val(tujuan);
            $('#waktu_tempuh').val(waktu_tempuh);
            $('#harga').val(harga);
            $('#myModal').modal('toggle');
        });

        $('#save').click(function(){
            var id = $('#id').val();
            var id_terminal = $('#id_terminal').val();
            var operator = $('#operator').val();
            var kelas = $('#kelas').val();
            var jam_berangkat = $('#jam_berangkat').val();
            var jam_datang = $('#jam_datang').val();
            var tujuan = $('#tujuan').val();
            var waktu_tempuh = $('#waktu_tempuh').val();
            var harga = $('#harga').val();

            $.ajax({
                url     : 'proses_update_jadwal.php',
                method  : 'POST',
                data    : {id : id , id_terminal : id_terminal , operator : operator , kelas : kelas , jam_berangkat : jam_berangkat , jam_datang : jam_datang , tujuan : tujuan , waktu_tempuh : waktu_tempuh , harga : harga},
                success : function(response) {
                    $('#myModal').modal('hide');
                    window.location.reload();
                }
            });
        });

    });
</script>

</html>