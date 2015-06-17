<div class="block-flat">
	<div class="header">							
		<h3>Edit Nilai Poin</h3>
	</div>
	<div class="content">
		<form role="form" method="POST"> 
			<div class="form-group"> 
				<label>Nilai Poin</label>  
				<input type="text" value="<?php echo $row['nilai_poin']; ?>" class="form-control" name="nilai_poin" required>
			</div>
			<button class="btn btn-primary" type="submit" name="edit-ulangan1"><span class="fa fa-edit"></span> Edit Nilai Poin</button>
		</form>
	</div>
</div>