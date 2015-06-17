<div class="block-flat">
	<div class="header">							
		<h3>Kirim Data Nilai Raport</h3>
	</div>
	<div class="content">
		<form role="form" method="POST"> 
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
			</select><br/>
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
			</select><br/>
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
			</select><br/>
			<button type="submit" class="btn btn-primary" name="kirim"> Kirim nilai</button>
		</form>
		<?php 
			if (isset($_POST['kirim'])) {
				$kelas 	=	$_POST['kelas'];
				$semester 	=	$_POST['semester'];
				$jenis 	=	6;
				$tahun 	=	$_POST['tahun'];

				$raport = mysql_query("SELECT siswa.siswa_nama, siswa.siswa_telp, AVG(nilai.nilai_poin) AS nilaipoin
										FROM nilai 
										INNER JOIN siswa ON nilai.siswa_id=siswa.siswa_id
										INNER JOIN kelas ON siswa.kelas_id=kelas.kelas_id
										INNER JOIN jenis ON nilai.jenis_id=jenis.jenis_id
										INNER JOIN semester ON nilai.semester_id=semester.semester_id
										INNER JOIN tahun ON nilai.tahun_id=tahun.tahun_id
										WHERE jenis.jenis_id=6 AND kelas.kelas_id='$kelas' AND semester.semester_id='$semester' AND tahun.tahun_id='$tahun'
										GROUP BY siswa.siswa_nama");
				while ($data=mysql_fetch_array($raport)) {
					$rata2 		=	round($data['nilaipoin'],0);
					$pesan 		= "Nilai Rata-rata Raport " .$data['siswa_nama']. " adalah : " .$rata2;
					
					//echo $pesan;
					exec('c:\xampp\htdocs\gammu\gammu-smsd-inject.exe -c c:\xampp\htdocs\gammu\smsdrc1 EMS '.$data['siswa_telp'].' -text "'.$pesan.'"');
					echo "Sukses";
					echo "<meta http-equiv='refresh' content='0;URL= ?nilai=Raport '/>";
				}
			}
		?>
	</div>
</div>


