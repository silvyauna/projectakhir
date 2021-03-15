<?php
	include "koneksi.php";
	$db = new database();
	$data_kembali = $db->data_kembali_();
		
?>

<html>
<head><title>Pengembalian</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<style>
	body
	{
		background-image: url('bg.jpg');
		background-repeat: no-repeat;
		background-size:cover;
	}
</style>
</head>
<body>
<br/>
<div class="table col-md-3">
<a href="halaman_admin.php" class="btn btn-success">Kembali</a>
</div>
	<div class="container">
	 	 <div class="card border-dark mb-3 mx-auto">
	  <div class="card-header bg-secondary">
		<div class="row">
			<div class="col-sm-11 col-xs-3">
			<br/>
			  <h2>Data Pengembalian</h2>
			</div>
		</div>
	 </div>
		<div class="card-body">
			<?php
				$batas = 10;
				$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
				$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;
				$previous = $halaman - 1;
				$next = $halaman + 1;
				$data = $db->tampil_user();
				$jumlah_data = $data;
				$total_halaman = ceil($jumlah_data / $batas);
				$data_kembali = $db->tampil_kembali_paging($halaman_awal,$batas);
				$nomor = $halaman_awal+1;
				if($jumlah_data!=0){
					include "view_kembali.php";
				}else{
					echo "<br><br><h3>Data Anda Kosong</h3>";
				}
			?>
		</div>
	</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>