<html>
<head><title>Tambah Anggota</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<style>
	body
	{
		background-image: url('bg2.jpg');
		background-repeat: no-repeat;
		background-size:cover;
	}
</style>
</head>
<body>
<br><br>
<div class="container">
	<div class="card border-primary text-black mb-3 mx-auto" style="max-width: 850px; justify-content: center;">
	<div class="card-header">

<h2>Tambah Data Anggota</h2>
<center>
</div>
		<div class="card-body">
		<div class="row">
		<div class="col-sm">
		
		<form action="proses_anggota.php?aksi=tambah_anggota" method="post">

		<div class="form-group row justify-content-md-center">
		<label for="nis" class="col-sm-2 col-form-label">NIS</label>
			<div class="col-6 col-sm-4">
			<div id="error_msg" align="center"></div>
			<input type="text" class="form-control" id="nis" value="" name="nis" autocomplete="off" required="">
			<div id="result"></div>
			<div class="invalid-feedback">
				Silakan Masukkan NIS Anda
			</div>
			<span></span>
			</div>
		</div>
		
		<div class="form-group row justify-content-md-center">
		<label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
			<div class="col-6 col-sm-4">
			<div id="error_msg" align="center"></div>
			<input type="text" class="form-control" id="nama" value="" name="nama" autocomplete="off" required>
			<div class="invalid-feedback">Silahkan Masukan Nama Anda</div>
			<span></span>
		</div>
		</div>
		
		<div class="form-group row justify-content-md-center">
				<label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
				<div class="col-6 col-sm-4">
				<select name="kelas" class="custom-select custom-select-sm" id="kelas">
					<option value="1">X</option>
					<option value="2">XI</option>
					<option value="3">XII</option>
				</select>
		</div>
		</div>
		
		<div class="form-group row justify-content-md-center">
				<label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
				<div class="col-6 col-sm-4">
				<select name="jurusan" class="custom-select custom-select-sm" id="jurusan">
					<option value="AK">Akutansi</option>
					<option value="AP">Administrasi Perkantoran</option>
					<option value="PM">Pemasaran</option>
					<option value="UPW">Usaha Perjalanan Wisata</option>
					<option value="MM">Multimedia</option>
					<option value="RPL">Rekayasa Perangkat Lunak</option>
					<option value="BC">Broadcasting</option>
				</select>
		</div>
		</div>
			
		
	<tr>
		<div class="row justify-content-md-center">
		<input class="btn btn-success" style="margin-right:2%;" action="action" onclick="window.history.go(-1); return false;" type="submit" value="&lt;&lt; Kembali">
		<input type="submit" value="Simpan" class="btn btn-info">
		</div>
	</tr>
</table>
<form>
</center>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>