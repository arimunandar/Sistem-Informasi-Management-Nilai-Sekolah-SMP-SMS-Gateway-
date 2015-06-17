<div class="block-flat">
	<div class="header">							
		<h3>Edit Tahun Ajaran</h3>
	</div>
	<div class="content">
		<?php include('core/edit.php'); ?>
		<form role="form" method="POST"> 
			<div class="form-group"> 
				<label>Tahun Ajaran</label> <input type="text" value="<?php echo $row['tahun_nama']; ?>" class="form-control" name="nama" required>
			</div>
			<button class="btn btn-primary" type="submit" name="edit-tahun"><span class="fa fa-edit"></span> Edit Tahun Ajaran</button>
		</form>
	</div>
</div>