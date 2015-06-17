<?php 

	if (isset($_GET['del-admin'])) {
		$id	=	$_GET['del-admin'];

		$delete 	=	mysql_query("DELETE FROM user WHERE id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?user=Admin '/>";
		}
	}elseif (isset($_GET['del-guru'])) {
		$id	=	$_GET['del-guru'];

		$delete 	=	mysql_query("DELETE FROM guru WHERE guru_id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?user=Guru '/>";;
		}
	}elseif (isset($_GET['del-siswa'])) {
		$id	=	$_GET['del-siswa'];

		$delete 	=	mysql_query("DELETE FROM siswa WHERE siswa_id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?user=Siswa '/>";
		}
	}elseif (isset($_GET['del-pelajaran'])) {
		$id	=	$_GET['del-pelajaran'];

		$delete 	=	mysql_query("DELETE FROM pelajaran WHERE pelajaran_id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?akademik=Pelajaran '/>";
		}
	}elseif (isset($_GET['del-kelas'])) {
		$id	=	$_GET['del-kelas'];

		$delete 	=	mysql_query("DELETE FROM kelas WHERE kelas_id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?akademik=Kelas '/>";
		}
	}elseif (isset($_GET['del-tahun'])) {
		$id	=	$_GET['del-tahun'];

		$delete 	=	mysql_query("DELETE FROM tahun WHERE tahun_id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?akademik=Tahun '/>";
		}
	}elseif (isset($_GET['del-ulangan1'])) {
		$id	=	$_GET['del-ulangan1'];

		$delete 	=	mysql_query("DELETE FROM nilai WHERE nilai_id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?nilai=Ulangan1 '/>";
		}
	}elseif (isset($_GET['del-ulangan2'])) {
		$id	=	$_GET['del-ulangan2'];

		$delete 	=	mysql_query("DELETE FROM nilai WHERE nilai_id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?nilai=Ulangan2 '/>";
		}
	}elseif (isset($_GET['del-ulangan3'])) {
		$id	=	$_GET['del-ulangan3'];

		$delete 	=	mysql_query("DELETE FROM nilai WHERE nilai_id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?nilai=Ulangan3 '/>";
		}
	}elseif (isset($_GET['del-uts'])) {
		$id	=	$_GET['del-uts'];

		$delete 	=	mysql_query("DELETE FROM nilai WHERE nilai_id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?nilai=UTS '/>";
		}
	}elseif (isset($_GET['del-uas'])) {
		$id	=	$_GET['del-uas'];

		$delete 	=	mysql_query("DELETE FROM nilai WHERE nilai_id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?nilai=UAS '/>";
		}
	}elseif (isset($_GET['del-raport'])) {
		$id	=	$_GET['del-raport'];

		$delete 	=	mysql_query("DELETE FROM nilai WHERE nilai_id = $id");
		if ($delete) {
			echo "<meta http-equiv='refresh' content='0;URL= ?nilai=Raport '/>";
		}
	}
?>