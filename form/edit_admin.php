<div class="block-flat">
	<div class="header">							
		<h3>Edit Admin</h3>
	</div>
	<div class="content">
		<?php require_once('core/edit.php'); ?>
		<form role="form" method="POST"> 
			<div class="form-group"> 
				<label>Nama</label> <input type="text" value="<?php echo $row['nama']; ?>" class="form-control" name="nama" required>
			</div> 
			<div class="form-group">
				<label>Username</label> <input type="text" value="<?php echo $row['username']; ?>" class="form-control" name="username" required>
			</div>
			<div class="form-group"> 
				<label>Password</label> <input type="password" value="<?php echo $row['password']; ?>" class="form-control" name="password" required>
			</div>
			<button class="btn btn-primary" type="submit" name="edit-admin"><span class="fa fa-edit"></span> Edit Admin</button>
		</form>
	</div>
</div>