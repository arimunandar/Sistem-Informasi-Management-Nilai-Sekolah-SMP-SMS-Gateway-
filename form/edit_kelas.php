<div class="block-flat">
	<div class="header">							
		<h3>Edit Kelas</h3>
	</div>
	<div class="content">
		<?php include('core/edit.php'); ?>
		<form role="form" method="POST"> 
			<div class="form-group"> 
				<label>Nama Kelas</label> <input type="text" value="<?php echo $row['kelas_nama']; ?>" class="form-control" name="nama" required>
			</div>
			<button class="btn btn-primary" type="submit" name="edit-kelas"><span class="fa fa-edit"></span> Edit Kelas</button>
		</form>
	</div>
</div>