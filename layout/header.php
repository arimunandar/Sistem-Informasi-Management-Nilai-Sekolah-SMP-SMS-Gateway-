<?php 
	session_start();
	require_once('config.php');
	if (!isset($_SESSION['username'])) {
		header('Location: index.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="images/favicon.png">

		<title>Sistem Informasi Nilai Sekolah</title>
		
		<!--======================== Bootstrap core CSS ========================== -->
		<link href="js/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="js/jquery.gritter/css/jquery.gritter.css" />

		<link rel="stylesheet" href="fonts/font-awesome-4/css/font-awesome.min.css">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="../../assets/js/html5shiv.js"></script>
		<script src="../../assets/js/respond.min.js"></script>
		<![endif]-->
		<link rel="stylesheet" type="text/css" href="js/jquery.nanoscroller/nanoscroller.css" />
		<link rel="stylesheet" type="text/css" href="js/jquery.easypiechart/jquery.easy-pie-chart.css" />
		<link rel="stylesheet" type="text/css" href="js/bootstrap.switch/bootstrap-switch.css" />
		<link rel="stylesheet" type="text/css" href="js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" type="text/css" href="js/jquery.select2/select2.css" />
		<link rel="stylesheet" type="text/css" href="js/bootstrap.slider/css/slider.css" />
		<link rel="stylesheet" type="text/css" href="js/jquery.niftymodals/css/component.css" />
		<link rel="stylesheet" type="text/css" href="js/jquery.datatables/bootstrap-adapter/css/datatables.css" />

		<!--======================== Custom styles for this template ========================== -->
		<link href="css/style.css" rel="stylesheet" />
		<script type="text/javascript">
			function ajaxrunning()
			{
				if (window.XMLHttpRequest)
				{
					xmlhttp=new XMLHttpRequest();
				}
				else
				{
					xmlhttp =new ActiveXObject("Microsoft.XMLHTTP");
				}
		
				xmlhttp.onreadystatechange=function()
				{
					if (xmlhttp.readyState==4 && xmlhttp.status==200)
					{
					}
				}
		
				xmlhttp.open("GET","sms.php");
				xmlhttp.send();
				setTimeout("ajaxrunning()", 5000);
			}
		</script>
	</head>
<body>
	<!--======================== Fixed Navbar ========================== -->
	<div id="head-nav" class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="fa fa-gear"></span>
				</button>
				<a class="navbar-brand" href="#"><span>SIN</span></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right user-nav">
					<li class="dropdown profile_menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<span class="fa fa-gear"></span> Setting 
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="#"><span class="glyphicon glyphicon-user"></span> 
									<?php echo "$_SESSION[nama]"; ?>
								</a>
							</li>
							<li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Sign Out</a></li>
						</ul>
					</li>
				</ul>     
			</div><!--/.nav-collapse -->
		</div>
	</div>

	<div id="cl-wrapper">
		<div class="cl-sidebar">
			<div class="cl-toggle"><i class="fa fa-bars"></i></div>
			<div class="cl-navblock">
				<div class="menu-space">
					<div class="content">

						<ul class="cl-vnavigation">
							<li><a href="dashboard.php"><i class="fa fa-home"></i><span>Dashboard</span></a>
							</li>
							<li><a href="#"><i class="fa fa-users"></i><span>Management Users</span></a>
								<ul class="sub-menu">
									<li><a href="?user=Admin"><span class="fa fa-asterisk"></span> Admin</a></li>									
									<li><a href="?user=Guru"><span class="fa fa-asterisk"></span> Guru</a></li>
									<li><a href="?user=Siswa"><span class="fa fa-asterisk"></span> Siswa</a></li>
								</ul>
							</li>														
							<li><a href="#"><i class="fa fa-book"></i><span>Management Akademik</span></a>
								<ul class="sub-menu">
									<li><a href="?akademik=Pelajaran"><span class="fa fa-asterisk"></span> Mata Pelajaran</a></li>
									<li><a href="?akademik=Kelas"><span class="fa fa-asterisk"></span> Kelas</a></li>
									<li><a href="?akademik=Tahun"><span class="fa fa-asterisk"></span> Tahun Ajaran</a></li>
								</ul>
							</li>
							<li><a href="#"><i class="fa fa-pencil"></i><span>Management Nilai</span></a>
								<ul class="sub-menu">
									<li><a href="?nilai=Ulangan1"><span class="fa fa-asterisk"></span> UH 1</a></li>
									<li><a href="?nilai=Ulangan2"><span class="fa fa-asterisk"></span> UH 2</a></li>
									<li><a href="?nilai=Ulangan3"><span class="fa fa-asterisk"></span> UH 3</a></li>
									<li><a href="?nilai=UTS"><span class="fa fa-asterisk"></span> Ujian Tengah Semester</a></li>
									<li><a href="?nilai=UAS"><span class="fa fa-asterisk"></span> Ujian Akhir Semester</a></li>
									<li><a href="?nilai=Raport"><span class="fa fa-asterisk"></span> Raport</a></li>
								</ul>
							</li>
							<li><a href="#"><i class="fa fa-print"></i><span>Laporan Nilai</span></a>
								<ul class="sub-menu">
									<li><a href="?cetak=laporan-nilai-siswa"><span class="fa fa-asterisk"></span> Cetak Nilai Siswa</a></li>
									<li><a href="?cetak=laporan-nilai-kelas"><span class="fa fa-asterisk"></span> Cetak Nilai Kelas</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<div class="text-right collapse-button" style="padding:7px 9px;">
					<input type="text" class="form-control search" placeholder="" />
					<button id="sidebar-collapse" class="btn btn-default" style="">
						<i style="color:#fff;" class="fa fa-angle-left"></i>
					</button>
				</div>
			</div>
		</div>