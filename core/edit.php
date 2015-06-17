<?php 
	if (isset($_GET['edit-admin'])) {
		$id 	=	$_GET['edit-admin'];	

		if (isset($_POST['edit-admin'])) {
			$nama 		= $_POST['nama'];
			$username 	= $_POST['username'];
			$password	= $_POST['password'];

			$admin = mysql_query("UPDATE user 
									SET `username` = '$username', `password` = '$password', `nama` = '$nama' 
									WHERE id = $id");

			if ($admin) {
				echo "<meta http-equiv='refresh' content='0;URL= ?user=Admin '/>";
			}
		}

		$admin 	=	mysql_query("SELECT * FROM user WHERE id=$id");
		$row	=	mysql_fetch_array($admin);
	}elseif (isset($_GET['edit-guru'])) {
		$id 	=	$_GET['edit-guru'];	

		if (isset($_POST['edit-guru'])) {
			$nama 		= $_POST['nama'];
			$nip 		= $_POST['nip'];
			$ttl		= $_POST['ttl'];
			$status 	= $_POST['status'];
			$jabatan 	= $_POST['jabatan'];
			$golongan	= $_POST['golongan'];
			$kelas 		= $_POST['kelas'];
			$pelajaran 	= $_POST['pelajaran'];

			$guru = mysql_query("UPDATE guru 
									SET `guru_nama` = '$nama', `guru_nip` = '$nip', `guru_ttl` = '$ttl',
										`guru_status` = '$status', `guru_jabatan` = '$jabatan', `guru_golongan` = '$golongan',
										`kelas_id` = '$kelas', `pelajaran_id` = '$pelajaran'
									WHERE guru_id = $id");

			if ($guru) {
				echo "<meta http-equiv='refresh' content='0;URL= ?user=Guru '/>";
			}
		}

		$guru 	=	mysql_query("SELECT * FROM guru WHERE guru_id=$id");
		$row	=	mysql_fetch_array($guru);
	}elseif (isset($_GET['edit-siswa'])) {
		$id 	=	$_GET['edit-siswa'];	

		if (isset($_POST['edit-siswa'])) {
			$nama 		= $_POST['nama'];
			$nis 		= $_POST['nis'];
			$kelas 		= $_POST['kelas'];
			$ttl		= $_POST['ttl'];
			$telepon 	= $_POST['telepon'];
			$status		= $_POST['status'];
			$alamat 	= $_POST['alamat'];

			$siswa = mysql_query("UPDATE siswa
									SET `siswa_nama` = '$nama', `siswa_nis` = '$nis', `siswa_ttl` = '$ttl',
										`siswa_telp` = '$telepon', `siswa_status` = '$status',
										`siswa_alamat` = '$alamat', `kelas_id` = '$kelas'
									WHERE siswa_id = $id");

			if ($siswa) {
				echo "<meta http-equiv='refresh' content='0;URL= ?user=Siswa '/>";
			}
		}

		$siswa 	=	mysql_query("SELECT * FROM siswa WHERE siswa_id=$id");
		$row	=	mysql_fetch_array($siswa);
	}elseif (isset($_GET['edit-pelajaran'])) {
		$id 	=	$_GET['edit-pelajaran'];	

		if (isset($_POST['edit-pelajaran'])) {
			$nama 		= $_POST['nama'];

			$pelajaran = mysql_query("UPDATE pelajaran 
									SET `pelajaran_nama` = '$nama'
									WHERE pelajaran_id = $id");

			if ($pelajaran) {
				echo "<meta http-equiv='refresh' content='0;URL= ?akademik=Pelajaran '/>";
			}
		}

		$pelajaran 	=	mysql_query("SELECT * FROM pelajaran WHERE pelajaran_id=$id");
		$row	=	mysql_fetch_array($pelajaran);
	}elseif (isset($_GET['edit-kelas'])) {
		$id 	=	$_GET['edit-kelas'];	

		if (isset($_POST['edit-kelas'])) {
			$nama 		= $_POST['nama'];

			$kelas = mysql_query("UPDATE kelas 
									SET `kelas_nama` = '$nama'
									WHERE kelas_id = $id");

			if ($kelas) {
				echo "<meta http-equiv='refresh' content='0;URL= ?akademik=Kelas '/>";
			}
		}

		$kelas 	=	mysql_query("SELECT * FROM kelas WHERE kelas_id=$id");
		$row	=	mysql_fetch_array($kelas);
	}elseif (isset($_GET['edit-tahun'])) {
		$id 	=	$_GET['edit-tahun'];	

		if (isset($_POST['edit-tahun'])) {
			$nama 		= $_POST['nama'];

			$tahun = mysql_query("UPDATE tahun 
									SET `tahun_nama` = '$nama'
									WHERE tahun_id = $id");

			if ($tahun) {
				echo "<meta http-equiv='refresh' content='0;URL= ?akademik=Tahun '/>";
			}
		}

		$tahun 	=	mysql_query("SELECT * FROM tahun WHERE tahun_id=$id");
		$row	=	mysql_fetch_array($tahun);
	}elseif (isset($_GET['edit-ulangan1'])) {
		$id 	=	$_GET['edit-ulangan1'];

		if (isset($_POST['edit-ulangan1'])) {
			$nilaipoin = $_POST['nilai_poin'];

			$nilai = mysql_query("UPDATE nilai
									SET `nilai_poin` = $nilaipoin
									WHERE nilai_id = $id");
			if ($nilai) {
			 	echo "<meta http-equiv='refresh' content='0;URL= ?nilai=Ulangan1 '/>";
			 } 
		}

		$nilai 	= 	mysql_query("SELECT nilai_id, nilai_poin FROM nilai WHERE nilai_id=$id");
		$row 	=	mysql_fetch_array($nilai);
	}elseif (isset($_GET['edit-ulangan2'])) {
		$id 	=	$_GET['edit-ulangan2'];

		if (isset($_POST['edit-ulangan2'])) {
			$nilaipoin = $_POST['nilai_poin'];

			$nilai = mysql_query("UPDATE nilai
									SET `nilai_poin` = $nilaipoin
									WHERE nilai_id = $id");
			if ($nilai) {
			 	echo "<meta http-equiv='refresh' content='0;URL= ?nilai=Ulangan2 '/>";
			 } 
		}

		$nilai 	= 	mysql_query("SELECT nilai_id, nilai_poin FROM nilai WHERE nilai_id=$id");
		$row 	=	mysql_fetch_array($nilai);
	}elseif (isset($_GET['edit-ulangan3'])) {
		$id 	=	$_GET['edit-ulangan3'];

		if (isset($_POST['edit-ulangan3'])) {
			$nilaipoin = $_POST['nilai_poin'];

			$nilai = mysql_query("UPDATE nilai
									SET `nilai_poin` = $nilaipoin
									WHERE nilai_id = $id");
			if ($nilai) {
			 	echo "<meta http-equiv='refresh' content='0;URL= ?nilai=Ulangan3 '/>";
			 } 
		}

		$nilai 	= 	mysql_query("SELECT nilai_id, nilai_poin FROM nilai WHERE nilai_id=$id");
		$row 	=	mysql_fetch_array($nilai);
	}elseif (isset($_GET['edit-uts'])) {
		$id 	=	$_GET['edit-uts'];

		if (isset($_POST['edit-uts'])) {
			$nilaipoin = $_POST['nilai_poin'];

			$nilai = mysql_query("UPDATE nilai
									SET `nilai_poin` = $nilaipoin
									WHERE nilai_id = $id");
			if ($nilai) {
			 	echo "<meta http-equiv='refresh' content='0;URL= ?nilai=UTS '/>";
			 } 
		}

		$nilai 	= 	mysql_query("SELECT nilai_id, nilai_poin FROM nilai WHERE nilai_id=$id");
		$row 	=	mysql_fetch_array($nilai);
	}elseif (isset($_GET['edit-uas'])) {
		$id 	=	$_GET['edit-uas'];

		if (isset($_POST['edit-uas'])) {
			$nilaipoin = $_POST['nilai_poin'];

			$nilai = mysql_query("UPDATE nilai
									SET `nilai_poin` = $nilaipoin
									WHERE nilai_id = $id");
			if ($nilai) {
			 	echo "<meta http-equiv='refresh' content='0;URL= ?nilai=UAS '/>";
			 } 
		}

		$nilai 	= 	mysql_query("SELECT nilai_id, nilai_poin FROM nilai WHERE nilai_id=$id");
		$row 	=	mysql_fetch_array($nilai);
	}elseif (isset($_GET['edit-raport'])) {
		$id 	=	$_GET['edit-raport'];

		if (isset($_POST['edit-raport'])) {
			$nilaipoin = $_POST['nilai_poin'];

			$nilai = mysql_query("UPDATE nilai
									SET `nilai_poin` = $nilaipoin
									WHERE nilai_id = $id");
			if ($nilai) {
			 	echo "<meta http-equiv='refresh' content='0;URL= ?nilai=Raport '/>";
			 } 
		}

		$nilai 	= 	mysql_query("SELECT nilai_id, nilai_poin FROM nilai WHERE nilai_id=$id");
		$row 	=	mysql_fetch_array($nilai);
	}
?>