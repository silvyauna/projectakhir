<html>
<head><title>Data Detail Buku</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<br><br>
<div class="container">
		<div class="card border-primary text-black mb-3 mx-auto" style="max-width: 620px; justify-content: center;">
		<div class="card-header">
			<h2>Edit Data Detail Buku</h2>
		</div>
<form action="proses_detailbuku.php?aksi=edit_detailbuku" method="post">
<?php
include "koneksi.php";
$db = new database();
$nobuku = $_GET['nobuku'];
if(!is_null($nobuku)){
	$data_detailbuku = $db->ambil_data_detailbuku($nobuku);
}else{
	header("Location:tampil_detailbuku.php");
}
?>
<div class="container">
	<div class="row">
	<div class="col-sm">
	<br>
	<input type="hidden" name="nobuku" value="<?php echo $data_detailbuku['nobuku']; ?>">
		<div class="form-group row justify-content-md-center">
		<label for="idbuku" class="col-sm-2 col-form-label">ID Buku</label>
		<div class="col-sm-4">
		<input type="text" id="idbuku" class="form-control" value="<?php echo $data_detailbuku['idbuku']; ?>" name="idbuku" required>
		</div>
		</div>
		
		
		<div class="form-group row justify-content-md-center">
			<label for="status" class="col-sm-2 col-form-label">Status</label>
				<div class="col-sm-4">
					<select name="status" class="custom-select custom-select-sm">
						<?php $status = $data_detailbuku['status']; ?>
							<option value="Dipinjam" <?php if($status=="Dipinjam"){echo "selected";} ?>>Dipinjam</option>
							<option value="Tersedia" <?php if($status=="Tersedia"){echo "selected";} ?>>Tersedia</option>
					</select>
		</div>
		</div>
					
	
	<tr>
		<div class="row justify-content-md-center">
		<input type="submit" value="Update" class="btn btn-info">
	</tr>
</form>
</table>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</center>
</body>
</html>