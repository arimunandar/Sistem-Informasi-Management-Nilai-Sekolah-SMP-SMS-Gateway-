<div class="block-flat">
	<div class="header">							
		<h3>Input Data Nilai Raport</h3>
	</div>
	<div class="content">
		<form role="form" method="POST"> 
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
			<button class="btn btn-primary" type="submit" name="create-nilai"><span class="fa fa-plus"></span> Tambah Nilai UAS</button>
		</form>
	</div>
</div>

<div class="block-flat no-padding">
	<div class="content">
		<table class="no-border blue">
			<thead class="no-border">
				<tr>
					<th style="width: 5%;" class="text-center">No</th>
					<th >Nama</th>
					<th style="width: 17%;" class="text-center">Nilai Poin</th>
				</tr>
			</thead>	
			<form role="form" method="post" />
				<?php
					
					if(isset($_POST['create-nilai'])) {
						
						$no = 1;
						$kelasnama = $_POST['kelas'];
						$pelajarannama = $_POST['pelajaran'];
						$semesternama = $_POST['semester'];
						$jenisnama		=	'6';
						$tahunnama = $_POST['tahun'];
						$sql = mysql_query("SELECT siswa.siswa_id, siswa.siswa_nama, kelas.kelas_id, kelas.kelas_nama 
											FROM siswa
											INNER JOIN kelas ON siswa.kelas_id=kelas.kelas_id
											WHERE kelas.kelas_id=$kelasnama
											");
						while ($data=mysql_fetch_array($sql)) {
				?>
				<tr>
					<td class="text-center"><?php echo $no; ?></td>
					<td>
						<input type="hidden" class="form-control" name="siswa[]" id="siswa[]" value="<?php echo $data['siswa_id']; ?>">
						<?php 
							echo $data['siswa_nama'];
						?>
						<input type="hidden" name="pelajaran[]" id="pelajaran[]" value="<?php echo "$pelajarannama"; ?>">
						<input type="hidden" name="semester[]" id="semester[]" value="<?php echo "$semesternama"; ?>">
						<input type="hidden" name="jenis[]" id="jenis[]" value="<?php echo "$jenisnama"; ?>">
						<input type="hidden" name="tahun[]" id="tahun[]" value="<?php echo "$tahunnama"; ?>">
					</td>
					<td width="144" class="text-center">
						<input type="text" class="form-control" name="nilai[]" id="nilai[]" required>
					</td>
				</tr>
				<?php 
					$no++;  
					}
				?>		
				<tr>
					<td colspan="3" align="right" valign="baseline"><button type="submit" class="btn btn-success" name="raport-proses"><span class="fa fa-gear"></span> Proses</button></td>
				</tr>
			</form>
			<?php 
				}
			?>
		</table>
	</div>
</div>