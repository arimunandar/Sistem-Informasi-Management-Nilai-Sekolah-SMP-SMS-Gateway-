<?php require_once('layout/header.php'); ?>
  
<div class="container-fluid" id="pcont">
	<div class="page-head">
		<h2>Welcome SMP Taman Siswa Padang</h2>
		<ol class="breadcrumb">
			<li><a href="#"><i class="glyphicon glyphicon-home"></i> Home</a></li>
		</ol>
	</div>    
	<div class="cl-mcont">
<!-- ===================================== Content Here ===================================== -->
		<!-- Start Management -->
		<?php 				
			if (isset($_GET['user'])) {
				if ($_GET['user'] == 'Admin') {
					include('tabel/tabel_admin.php');					
				}elseif ($_GET['user'] == 'Guru') {
					include('tabel/tabel_guru.php');
				}elseif ($_GET['user'] == 'Siswa') {
					include('tabel/tabel_siswa.php');
				}				
			}elseif (isset($_GET['akademik'])) {
				if ($_GET['akademik'] == 'Pelajaran') {
					include('tabel/tabel_pelajaran.php');
				}elseif ($_GET['akademik'] == 'Kelas') {
					include('tabel/tabel_kelas.php');
				}elseif ($_GET['akademik'] == 'Tahun') {
					include('tabel/tabel_tahun.php');
				}
			}elseif (isset($_GET['nilai'])) {
				if ($_GET['nilai'] == 'Ulangan1') {
					include('tabel/tabel_ulangan1.php');
				}elseif ($_GET['nilai'] == 'Ulangan2') {
					include('tabel/tabel_ulangan2.php');
				}
				elseif ($_GET['nilai'] == 'Ulangan3') {
					include('tabel/tabel_ulangan3.php');
				}
				elseif ($_GET['nilai'] == 'UTS') {
					include('tabel/tabel_uts.php');
				}
				elseif ($_GET['nilai'] == 'UAS') {
					include('tabel/tabel_uas.php');
				}elseif ($_GET['nilai'] == 'Raport') {
					include('tabel/tabel_raport.php');
				}elseif ($_GET['nilai'] == 'Kirim') {
					include('form/kirim_raport.php');
				}
			}elseif (isset($_GET['cetak'])) {
				if ($_GET['cetak'] == 'laporan-nilai-siswa') {
					include('laporan/laporan-siswa.php');
				}elseif ($_GET['cetak'] = 'laporan-nilai-kelas') {
					include('laporan/laporan-kelas.php');
				}
			}
		?>	
		<!-- End Management -->
<!-- ===================================== Content Here ===================================== -->
	</div>
</div> 
  
<?php require_once('layout/footer.php'); ?>