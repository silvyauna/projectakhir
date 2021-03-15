<html>
<head><title>Data Users</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<br><br>
<div class="container">
		<div class="card border-primary text-black mb-3 mx-auto" style="max-width: 620px; justify-content: center;">
		<div class="card-header">
			<h2>Edit Data User</h2>
		</div>
<form action="proses.php?aksi=edit_user" method="post">
<?php
include "koneksi.php";
$db = new database();
$iduser = $_GET['iduser'];
if(!is_null($iduser)){
	$data_user = $db->ambil_data_user($iduser);
}else{
	header("Location:tampil_user.php");
}
?>
<div class="container">
	<div class="row">
	<div class="col-sm">
	<br>
	<input type="hidden" name="iduser" value="<?php echo $iduser; ?>">
		<div class="form-group row justify-content-md-center">
		<label for="username" class="col-sm-2 col-form-label">Username</label>
		<div class="col-sm-4">
		<input type="text" id="username" class="form-control" value="<?php echo $data_user['username']; ?>" name="username" required>
		</div>
		</div>
		
		<div class="form-group row justify-content-md-center">
		<label for="password" class="col-sm-2 col-form-label">Password</label>
		<div class="col-sm-4">
		<input type="text" id="password" class="form-control" value="<?php echo $data_user['password']; ?>" name="password" required>
		</div>
		</div>

		<div class="form-group row justify-content-md-center">
			<label for="type" class="col-sm-2 col-form-label">Tipe</label>
				<div class="col-sm-4">
					<select name="tipe" class="custom-select custom-select-sm">
						<?php $tipe = $data_user['type']; ?>
							<option value="A" <?php if($tipe=="A"){echo "selected";} ?>>Admin</option>
							<option value="U" <?php if($tipe=="U"){echo "selected";} ?>>User</option>
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