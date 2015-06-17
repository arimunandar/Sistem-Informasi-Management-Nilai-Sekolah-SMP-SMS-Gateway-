<div class="block-flat">
	<div class="header">							
		<h3>Edit Mata Pelajaran</h3>
	</div>
	<div class="content">
		<?php include('core/edit.php'); ?>
		<form role="form" method="POST"> 
			<div class="form-group"> 
				<label>Nama Mata Pelajaran</label> <input type="text" value="<?php echo $row['pelajaran_nama']; ?>" class="form-control" name="nama" required>
			</div>
			<button class="btn btn-primary" type="submit" name="edit-pelajaran"><span class="fa fa-edit"></span> Edit Mata Pelajaran</button>
		</form>
	</div>
</div>