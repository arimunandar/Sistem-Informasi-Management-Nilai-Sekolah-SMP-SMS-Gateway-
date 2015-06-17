<div class="block-flat">
	<div class="header">							
		<h3>Create Guru</h3>
	</div>
	<div class="content">
		<form role="form" method="POST"> 
			<div class="form-group"> 
				<label>Nama</label> <input type="text" placeholder="Enter Nama" class="form-control" name="nama" required>
			</div>
			<div class="form-group"> 
				<label>NIP / NIY</label> <input type="text" placeholder="Enter NIP / NIY" class="form-control" name="nip" required>
			</div>
			<div class="form-group"> 
				<label>Tempat / Tanggal Lahir</label> <input type="text" placeholder="Enter Tempat / Tanggal Lahir" class="form-control" name="ttl" required>
			</div> 
			<div class="form-group">
				<label>Status</label>
				<select name="status" class="form-control" required>
					<option>PNS</option>
					<option>HONORER</option>
				</select>
			</div>
			<div class="form-group"> 
				<label>Jabatan</label> <input type="text" placeholder="Enter Jabatan" class="form-control" name="jabatan" required>
			</div>
			<div class="form-group"> 
				<label>Golongan</label> <input type="text" placeholder="Enter Golongan" class="form-control" name="golongan" required>
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
			<div class="form-group"> 
				<label>Mata Pelajaran</label>
				<select name="pelajaran" class="form-control" required>
					<?php 
						$pelajaran	=	mysql_query("SELECT * FROM pelajaran");

						while ($row=mysql_fetch_array($pelajaran)) {
					?>
						<option value="<?php echo $row['pelajaran_id']; ?>"><?php echo $row['pelajaran_nama']; ?></option>
					<?php
						}
					?>
				</select>
			</div>
			<button class="btn btn-primary" type="submit" name="create-guru"><span class="fa fa-plus"></span> Tambah Guru</button>
		</form>
	</div>
</div>