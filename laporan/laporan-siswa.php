<div class="block-flat">
	<div class="header">							
		<h3>Cari Data Nilai Siswa</h3>
	</div>
	<div class="content">
		<form role="form" method="POST" action="laporan/cetak-nilai-siswa.php"> 
			<div class="form-group"> 
				<label>Nama Siswa</label>
				<select name="siswa" class="form-control" required>
					<?php 
						$siswa	=	mysql_query("SELECT * FROM siswa");

						while ($row=mysql_fetch_array($siswa)) {
					?>
						<option value="<?php echo $row['siswa_id']; ?>"><?php echo $row['siswa_nama']; ?></option>
					<?php
						}
					?>
				</select>
			</div>
			<div class="form-group"> 
				<label>Jenis Nilai</label>
				<select name="jenis" class="form-control" required>
					<?php 
						$jenis	=	mysql_query("SELECT * FROM jenis");

						while ($row=mysql_fetch_array($jenis)) {
					?>
						<option value="<?php echo $row['jenis_id']; ?>"><?php echo $row['jenis_nama']; ?></option>
					<?php
						}
					?>
				</select>
			</div>
			<div class="form-group"> 
				<label>Semester</label>
				<select name="semester" class="form-control" required>
					<?php 
						$semester	=	mysql_query("SELECT * FROM semester");

						while ($row=mysql_fetch_array($semester)) {
					?>
						<option value="<?php echo $row['semester_id']; ?>"><?php echo $row['semester_nama']; ?></option>
					<?php
						}
					?>
				</select>
			</div>
			<div class="form-group"> 
				<label>Tahun Ajaran</label>
				<select name="tahun" class="form-control" required>
					<?php 
						$tahun	=	mysql_query("SELECT * FROM tahun");

						while ($row=mysql_fetch_array($tahun)) {
					?>
						<option value="<?php echo $row['tahun_id']; ?>"><?php echo $row['tahun_nama']; ?></option>
					<?php
						}
					?>
				</select>
			</div>
			<a href="?cetak=laporan" class="btn btn-success"><span class="fa fa-reply"></span> Kembali</a>
			<button class="btn btn-primary" type="submit" name="cetak-nilai"><span class="fa fa-search"></span> Cetak Nilai</button>
		</form>
	</div>
</div>
