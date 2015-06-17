<div class="block-flat">
	<div class="header">							
		<h3>Edit Siswa</h3>
	</div>
	<div class="content">
		<?php require_once('core/edit.php'); ?>
		<form role="form" method="POST"> 
			<div class="form-group"> 
				<label>Nama</label> <input type="text" value="<?php echo $row['siswa_nama']; ?>" class="form-control" name="nama" required>
			</div>
			<div class="form-group"> 
				<label>NIS</label> <input type="text" value="<?php echo $row['siswa_nis']; ?>" class="form-control" name="nis" required>
			</div>			
			<div class="form-group"> 
				<label>Tempat / Tanggal Lahir</label> <input type="text" value="<?php echo $row['siswa_ttl']; ?>" class="form-control" name="ttl" required>
			</div> 
			<div class="form-group"> 
				<label>Telepon</label> <input type="text" value="<?php echo $row['siswa_telp']; ?>" class="form-control" name="telepon" required>
			</div>
			<div class="form-group">
				<label>Status</label>
				<select name="status" class="form-control" required>
					<option>Aktif</option>
					<option>Tidak Aktif</option>
					<option>Alumni</option>
				</select>
			</div>			
			<div class="form-group"> 
				<label>Alamat</label>
				<textarea class="form-control" name="alamat" required><?php echo $row['siswa_alamat']; ?></textarea>
			</div>
			<div class="form-group"> 
				<label>Kelas</label>
				<select name="kelas" class="form-control" required>
					<?php 
						$kelas	=	mysql_query("SELECT * FROM kelas");

						while ($row=mysql_fetch_array($kelas)) {
					?>
						<option value="<?php echo $row['kelas_id']; ?>"><?php echo $row['kelas_nama']; ?></option>
					<?php
						}
					?>
				</select>
			</div>
			<button class="btn btn-primary" type="submit" name="edit-siswa"><span class="fa fa-edit"></span> Edit Siswa</button>
		</form>
	</div>
</div>