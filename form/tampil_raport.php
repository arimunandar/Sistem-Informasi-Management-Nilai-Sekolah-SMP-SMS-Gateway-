<?php

	if(isset($_POST['cek-nilai'])) {
?>
<div class="block-flat no-padding">
	<div class="content">
		<table class="no-border blue">
			<thead class="no-border">
				<tr>
					<th style="width: 5%;" class="text-center">No</th>
					<th >Nama</th>
					<th>Kelas</th>
					<th>Semester</th>
					<th width="150px">Tahun</th>
					<th style="width: 10%;" class="text-center">Nilai Rata-rata</th>
				</tr>
			</thead>	
			<form role="form" method="post" />
				<?php
						
						$no = 1;
						$kelasnama = $_POST['kelas'];
						$semesternama = $_POST['semester'];
						$tahunnama = $_POST['tahun'];
						$sql = mysql_query("SELECT siswa.siswa_nama, siswa.siswa_telp, AVG(nilai.nilai_poin) AS nilaipoin,
													kelas.kelas_nama, semester.semester_nama, tahun.tahun_nama
										FROM nilai 
										INNER JOIN siswa ON nilai.siswa_id=siswa.siswa_id
										INNER JOIN kelas ON siswa.kelas_id=kelas.kelas_id
										INNER JOIN jenis ON nilai.jenis_id=jenis.jenis_id
										INNER JOIN semester ON nilai.semester_id=semester.semester_id
										INNER JOIN tahun ON nilai.tahun_id=tahun.tahun_id
										WHERE jenis.jenis_id=6 AND kelas.kelas_id='$kelasnama' 
										AND semester.semester_id='$semesternama' AND tahun.tahun_id='$tahunnama'
										GROUP BY siswa.siswa_nama");
						while ($data=mysql_fetch_array($sql)) {
				?>
				<tr>
					<td class="text-center"><?php echo $no; ?></td>
					<td>						
						<?php 
							echo $data['siswa_nama'];
						?>						
					</td>
					<td>
						<?php 
							echo $data['kelas_nama'];
						?>
					</td>
					<td>
						<?php 
							echo $data['semester_nama'];
						?>
					</td>
					<td>
						<?php 
							echo $data['tahun_nama'];
						?>
					</td>
					<td class="text-center btn-success">
						<?php  

							$nilai = round($data['nilaipoin']);
							if ($nilai == 0) {
								echo "Data Kosong";
							}else {
								echo $nilai;
							}
						?>
					</td>
				</tr>
				<?php 
					$no++;  
					}
				?>
			</form>
		</table>
		<hr/>
		<a href="?nilai=Raport" class="btn btn-success"><span class="fa fa-reply"></span> Back</a>
	</div>
</div>
<?php 
	}else {
?>
<div class="block-flat">
	<div class="header">							
		<h3>Cari Data Nilai Raport</h3>
	</div>
	<div class="content">
		<form role="form" method="POST"> 
			<div class="form-group"> 
				<label>Kelas</label>
				<select name="kelas" class="form-control">
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
			<a href="?nilai=Raport" class="btn btn-success"><span class="fa fa-reply"></span> Kembali</a>
			<button class="btn btn-primary" type="submit" name="cek-nilai"><span class="fa fa-search"></span> Cari Nilai Raport</button>
		</form>
	</div>
</div>
<?php
	}
?>		
