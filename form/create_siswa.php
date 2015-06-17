<div class="block-flat">
	<div class="header">							
		<h3>Create Siswa</h3>
	</div>
	<div class="content">
		<form role="form" method="POST"> 
			<div class="form-group"> 
				<label>Nama</label> <input type="text" placeholder="Enter Nama" class="form-control" name="nama" required>
			</div>
			<div class="form-group"> 
				<label>NIS</label> <input type="text" placeholder="Enter NIS" class="form-control" name="nis" required>
			</div>			
			<div class="form-group"> 
				<label>Tempat / Tanggal Lahir</label> <input type="text" placeholder="Enter Tempat / Tanggal Lahir" class="form-control" name="ttl" required>
			</div> 
			<div class="form-group"> 
				<label>Telepon</label> <input type="text" placeholder="Enter Telepon" class="form-control" name="telepon" required>
			</div>
			<div class="form-group"> 
				<label>Gender</label>
				<select name="gender" class="form-control" required>
					<option>Laki-laki</option>
					<option>Perempuan</option>
				</select>
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
				<textarea class="form-control" name="alamat" required></textarea>
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
			<button class="btn btn-primary" type="submit" name="create-siswa"><span class="fa fa-plus"></span> Tambah Siswa</button>
		</form>
	</div>
</div>