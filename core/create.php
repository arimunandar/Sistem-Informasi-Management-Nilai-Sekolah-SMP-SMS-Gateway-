<?php 
	if (isset($_POST['create-admin'])) {
		$nama 		= $_POST['nama'];
		$username 	= $_POST['username'];
		$password	= $_POST['password'];

		$admin = mysql_query("INSERT INTO user (username, password, nama) VALUES ('$username', '$password', '$nama')");

		if ($admin) {
			echo "<meta http-equiv='refresh' content='0;URL= ?user=Admin '/>";
		}
	}elseif (isset($_POST['create-guru'])) {
		$nama 		= $_POST['nama'];
		$nip 		= $_POST['nip'];
		$ttl		= $_POST['ttl'];
		$status 	= $_POST['status'];
		$jabatan 	= $_POST['jabatan'];
		$golongan	= $_POST['golongan'];
		$kelas 		= $_POST['kelas'];
		$pelajaran 	= $_POST['pelajaran'];

		$guru = mysql_query("INSERT INTO guru (guru_nama, guru_nip, guru_ttl, guru_status, guru_jabatan, guru_golongan, kelas_id, pelajaran_id) 
								VALUES ('$nama', '$nip', '$ttl', '$status', '$jabatan', '$golongan', '$kelas', '$pelajaran')");

		if ($guru) {
			echo "<meta http-equiv='refresh' content='0;URL= ?user=Guru '/>";
		}
	}elseif (isset($_POST['create-siswa'])) {
		$nama 		= $_POST['nama'];
		$nis 		= $_POST['nis'];
		$kelas 		= $_POST['kelas'];
		$ttl		= $_POST['ttl'];
		$telepon 	= $_POST['telepon'];
		$gender 	= $_POST['gender'];
		$status		= $_POST['status'];
		$alamat 	= $_POST['alamat'];

		$siswa = mysql_query("INSERT INTO siswa (siswa_nama, siswa_nis, siswa_ttl, siswa_telp, siswa_gender, siswa_status, siswa_alamat, kelas_id) 
								VALUES ('$nama', '$nis', '$ttl', '$telepon', '$gender', '$status', '$alamat','$kelas')");

		if ($siswa) {
			echo "<meta http-equiv='refresh' content='0;URL= ?user=Siswa '/>";
		}
	}elseif (isset($_POST['create-pelajaran'])) {
		$nama 		= $_POST['nama'];

		$pelajaran = mysql_query("INSERT INTO pelajaran (pelajaran_nama) 
								VALUES ('$nama')");

		if ($pelajaran) {
			echo "<meta http-equiv='refresh' content='0;URL= ?akademik=Pelajaran '/>";
		}
	}elseif (isset($_POST['create-kelas'])) {
		$nama 		= $_POST['nama'];

		$kelas = mysql_query("INSERT INTO kelas (kelas_nama) 
								VALUES ('$nama')");

		if ($kelas) {
			echo "<meta http-equiv='refresh' content='0;URL= ?akademik=Kelas '/>";
		}
	}elseif (isset($_POST['create-tahun'])) {
		$nama 		= $_POST['nama'];

		$tahun = mysql_query("INSERT INTO tahun (tahun_nama) 
								VALUES ('$nama')");

		if ($tahun) {
			echo "<meta http-equiv='refresh' content='0;URL= ?akademik=Tahun '/>";
		}
	}elseif (isset($_POST['ulangan1-proses'])) {
		$siswa 		=	$_POST['siswa'];
		$pelajaran	=	$_POST['pelajaran'];
		$semester 	=	$_POST['semester'];
		$jenis 		=	$_POST['jenis'];
		$tahun 		=	$_POST['tahun'];
		$nilaipoin	=	$_POST['nilai'];
		$jumlahdata=count($siswa);

		for($x=0;$x<$jumlahdata;$x++) {
			$ulangan1	=	mysql_query("INSERT INTO `skripsi-dini`.`nilai` (`nilai_id`, `siswa_id`, `pelajaran_id`, `semester_id`, `jenis_id`, `tahun_id`, `nilai_poin`) 
										VALUES (NULL, '$siswa[$x]', '$pelajaran[$x]', '$semester[$x]', '$jenis[$x]', '$tahun[$x]', '$nilaipoin[$x]')");	
			if ($ulangan1) {
				echo "<meta http-equiv='refresh' content='0;URL= ?nilai=Ulangan1 '/>";
			}else{
				echo "Gagal Input Nilai";
			}
		}
	}elseif (isset($_POST['ulangan2-proses'])) {
		$siswa 		=	$_POST['siswa'];
		$pelajaran	=	$_POST['pelajaran'];
		$semester 	=	$_POST['semester'];
		$jenis 		=	$_POST['jenis'];
		$tahun 		=	$_POST['tahun'];
		$nilaipoin	=	$_POST['nilai'];
		$jumlahdata=count($siswa);

		for($x=0;$x<$jumlahdata;$x++) {
			$ulangan2	=	mysql_query("INSERT INTO `skripsi-dini`.`nilai` (`nilai_id`, `siswa_id`, `pelajaran_id`, `semester_id`, `jenis_id`, `tahun_id`, `nilai_poin`) 
										VALUES (NULL, '$siswa[$x]', '$pelajaran[$x]', '$semester[$x]', '$jenis[$x]', '$tahun[$x]', '$nilaipoin[$x]')");	
			if ($ulangan2) {
				echo "<meta http-equiv='refresh' content='0;URL= ?nilai=Ulangan2 '/>";
			}else{
				echo "Gagal Input Nilai";
			}
		}
	}elseif (isset($_POST['ulangan3-proses'])) {
		$siswa 		=	$_POST['siswa'];
		$pelajaran	=	$_POST['pelajaran'];
		$semester 	=	$_POST['semester'];
		$jenis 		=	$_POST['jenis'];
		$tahun 		=	$_POST['tahun'];
		$nilaipoin	=	$_POST['nilai'];
		$jumlahdata=count($siswa);

		for($x=0;$x<$jumlahdata;$x++) {
			$ulangan3	=	mysql_query("INSERT INTO `skripsi-dini`.`nilai` (`nilai_id`, `siswa_id`, `pelajaran_id`, `semester_id`, `jenis_id`, `tahun_id`, `nilai_poin`) 
										VALUES (NULL, '$siswa[$x]', '$pelajaran[$x]', '$semester[$x]', '$jenis[$x]', '$tahun[$x]', '$nilaipoin[$x]')");	
			if ($ulangan3) {
				echo "<meta http-equiv='refresh' content='0;URL= ?nilai=Ulangan3 '/>";
			}else{
				echo "Gagal Input Nilai";
			}
		}
	}elseif (isset($_POST['uts-proses'])) {
		$siswa 		=	$_POST['siswa'];
		$pelajaran	=	$_POST['pelajaran'];
		$semester 	=	$_POST['semester'];
		$jenis 		=	$_POST['jenis'];
		$tahun 		=	$_POST['tahun'];
		$nilaipoin	=	$_POST['nilai'];
		$jumlahdata=count($siswa);

		for($x=0;$x<$jumlahdata;$x++) {
			$uts	=	mysql_query("INSERT INTO `skripsi-dini`.`nilai` (`nilai_id`, `siswa_id`, `pelajaran_id`, `semester_id`, `jenis_id`, `tahun_id`, `nilai_poin`) 
										VALUES (NULL, '$siswa[$x]', '$pelajaran[$x]', '$semester[$x]', '$jenis[$x]', '$tahun[$x]', '$nilaipoin[$x]')");	
			if ($uts) {
				echo "<meta http-equiv='refresh' content='0;URL= ?nilai=UTS '/>";
			}else{
				echo "Gagal Input Nilai";
			}
		}
	}elseif (isset($_POST['uas-proses'])) {
		$siswa 		=	$_POST['siswa'];
		$pelajaran	=	$_POST['pelajaran'];
		$semester 	=	$_POST['semester'];
		$jenis 		=	$_POST['jenis'];
		$tahun 		=	$_POST['tahun'];
		$nilaipoin	=	$_POST['nilai'];
		$jumlahdata=count($siswa);

		for($x=0;$x<$jumlahdata;$x++) {
			$uas	=	mysql_query("INSERT INTO `skripsi-dini`.`nilai` (`nilai_id`, `siswa_id`, `pelajaran_id`, `semester_id`, `jenis_id`, `tahun_id`, `nilai_poin`) 
										VALUES (NULL, '$siswa[$x]', '$pelajaran[$x]', '$semester[$x]', '$jenis[$x]', '$tahun[$x]', '$nilaipoin[$x]')");	
			if ($uas) {
				echo "<meta http-equiv='refresh' content='0;URL= ?nilai=UAS '/>";
			}else{
				echo "Gagal Input Nilai";
			}
		}
	}elseif (isset($_POST['raport-proses'])) {
		$siswa 		=	$_POST['siswa'];
		$pelajaran	=	$_POST['pelajaran'];
		$semester 	=	$_POST['semester'];
		$jenis 		=	$_POST['jenis'];
		$tahun 		=	$_POST['tahun'];
		$nilaipoin	=	$_POST['nilai'];
		$jumlahdata=count($siswa);

		for($x=0;$x<$jumlahdata;$x++) {
			$raport	=	mysql_query("INSERT INTO `skripsi-dini`.`nilai` (`nilai_id`, `siswa_id`, `pelajaran_id`, `semester_id`, `jenis_id`, `tahun_id`, `nilai_poin`) 
										VALUES (NULL, '$siswa[$x]', '$pelajaran[$x]', '$semester[$x]', '$jenis[$x]', '$tahun[$x]', '$nilaipoin[$x]')");	
			if ($raport) {
				echo "<meta http-equiv='refresh' content='0;URL= ?nilai=Raport '/>";
			}else{
				echo "Gagal Input Nilai";
			}
		}
	}
?>