<?php

	require_once('../config.php');

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="../images/favicon.png">

		<title>Sistem Informasi Nilai Sekolah</title>
		
		<!--======================== Bootstrap core CSS ========================== -->
		<link href="../js/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../js/jquery.gritter/css/jquery.gritter.css" />

		<link rel="stylesheet" href="../fonts/font-awesome-4/css/font-awesome.min.css">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="../../assets/js/html5shiv.js"></script>
		<script src="../../assets/js/respond.min.js"></script>
		<![endif]-->
		<link rel="stylesheet" type="text/css" href="../js/jquery.nanoscroller/nanoscroller.css" />
		<link rel="stylesheet" type="text/css" href="../js/jquery.easypiechart/jquery.easy-pie-chart.css" />
		<link rel="stylesheet" type="text/css" href="../js/bootstrap.switch/bootstrap-switch.css" />
		<link rel="stylesheet" type="text/css" href="../js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css" />
		<link rel="stylesheet" type="text/css" href="../js/jquery.select2/select2.css" />
		<link rel="stylesheet" type="text/css" href="../js/bootstrap.slider/css/slider.css" />
		<link rel="stylesheet" type="text/css" href="../js/jquery.niftymodals/css/component.css" />
		<link rel="stylesheet" type="text/css" href="../js/jquery.datatables/bootstrap-adapter/css/datatables.css" />

		<!--======================== Custom styles for this template ========================== -->
		<link href="../css/style.css" rel="stylesheet" />
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
<center>
<div class="container" id="pcont">
	<div class="page-head">
		<h2>Laporan Nilai Siswa</h2><br>
		<h4>SMP Taman Siswa Padang</h4>
	</div>    
	<div class="cl-mcont">
<!-- ===================================== Content Here ===================================== -->
<div class="block-flat no-padding">
	<div class="content">
		<table class="no-border">
			<thead class="no-border">
				<tr>
					<th style="width: 5%;" class="text-center">No</th>
					<th width="7%">Mata Pelajaran</th>
					<th width="6%">Semester</th>
					<th width="7%">Tahun</th>
					<th style="width: 7%;" class="text-center">Nilai Poin</th>
				</tr>
			</thead>
				<?php 
					if (isset($_POST['cetak-nilai'])) {
						$no 		=	1;
						$siswa 		=	$_POST['siswa'];
						$jenis 		=	$_POST['jenis'];
						$semester 	=	$_POST['semester'];
						$tahun 		=	$_POST['tahun'];

						$sql 		=	mysql_query("SELECT siswa.siswa_nama, pelajaran.pelajaran_nama, nilai.nilai_poin, jenis.jenis_nama, semester.semester_nama, tahun.tahun_nama, kelas.kelas_id, kelas.kelas_nama 
													FROM nilai
													INNER JOIN siswa ON nilai.siswa_id=siswa.siswa_id
													INNER JOIN kelas ON siswa.kelas_id=kelas.kelas_id
													INNER JOIN pelajaran ON nilai.pelajaran_id=pelajaran.pelajaran_id
													INNER JOIN jenis ON nilai.jenis_id=jenis.jenis_id
													INNER JOIN semester ON nilai.semester_id=semester.semester_id
													INNER JOIN tahun ON nilai.tahun_id=tahun.tahun_id
													WHERE siswa.siswa_id=$siswa AND jenis.jenis_id=$jenis AND semester.semester_id=$semester AND tahun.tahun_id=$tahun
													ORDER BY pelajaran.pelajaran_nama");
						while ($data=mysql_fetch_array($sql)) {
				?>
				<tr>
					<td class="text-center"><?php echo $no; ?></td>
					<td>
						<?php 
							echo $data['pelajaran_nama'];
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
					<td class="text-center">
						<?php  
							if ($data['nilai_poin'] == 0) {
								echo "Data Kosong";
							}else {
								echo $data['nilai_poin'];
							}
						?>
					</td>
				</tr>
				<?php 
					$no++; 
						} 
					}
				?>
		</table>
		<hr>
		<div class="container-fluid">
			<?php 
				if (isset($_POST['cetak-nilai'])) {
						$siswa 		=	$_POST['siswa'];
						$jenis 		=	$_POST['jenis'];
						$semester 	=	$_POST['semester'];
						$tahun 		=	$_POST['tahun'];

						$sql 		=	mysql_query("SELECT siswa.siswa_nama, pelajaran.pelajaran_nama, nilai.nilai_poin, jenis.jenis_nama, semester.semester_nama, tahun.tahun_nama, kelas.kelas_id, kelas.kelas_nama 
													FROM nilai
													INNER JOIN siswa ON nilai.siswa_id=siswa.siswa_id
													INNER JOIN kelas ON siswa.kelas_id=kelas.kelas_id
													INNER JOIN pelajaran ON nilai.pelajaran_id=pelajaran.pelajaran_id
													INNER JOIN jenis ON nilai.jenis_id=jenis.jenis_id
													INNER JOIN semester ON nilai.semester_id=semester.semester_id
													INNER JOIN tahun ON nilai.tahun_id=tahun.tahun_id
													WHERE siswa.siswa_id=$siswa AND jenis.jenis_id=$jenis AND semester.semester_id=$semester AND tahun.tahun_id=$tahun
													ORDER BY pelajaran.pelajaran_nama");
						$row 		=	mysql_fetch_array($sql);
			
			?>
			<div class="content">
				<table class="no-border">
					<tbody class="no-border-x no-border-y">
						<tr>
							<td style="width:15%;">Nama</td>
							<td>:</td>
							<td class="text-left"><?php echo $row['siswa_nama']; ?></td>
						</tr>
						<tr>
							<td style="width:15%;">Kelas</td>
							<td>:</td>
							<td class="text-left"><?php echo $row['kelas_nama']; ?></td>
						</tr>
						<tr>
							<td style="width:15%;">Jenis Nilai</td>
							<td>:</td>
							<td class="text-left"><?php echo $row['jenis_nama']; ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<hr>
		<a href="../dashboard.php?cetak=laporan-nilai-siswa" cls='btn'><i class='fa fa-reply'></i> Kembali </a>
		<a href="cetak-nilai-kelas.php" cls='btn' onClick="window.print();return false"><i class='fa fa-print'></i> Cetak </a>
		<?php } ?>
	</div>
</div>
<!-- ===================================== Content Here ===================================== -->
	</div>
</div>
</center>

    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/jquery.gritter/js/jquery.gritter.js"></script>

    <script type="text/javascript" src="../js/jquery.nanoscroller/jquery.nanoscroller.js"></script>
    <script type="text/javascript" src="../js/behaviour/general.js"></script>
    <script src="../js/jquery.ui/jquery-ui.js" type="text/javascript"></script>
    <script type="text/javascript" src="../js/jquery.sparkline/jquery.sparkline.min.js"></script>
    <script type="text/javascript" src="../js/jquery.easypiechart/jquery.easy-pie-chart.js"></script>
    <script type="text/javascript" src="../js/jquery.nestable/jquery.nestable.js"></script>
    <script type="text/javascript" src="../js/bootstrap.switch/bootstrap-switch.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="../js/jquery.select2/select2.min.js" type="text/javascript"></script>
    <script src="../js/skycons/skycons.js" type="text/javascript"></script>
    <script src="../js/bootstrap.slider/js/bootstrap-slider.js" type="text/javascript"></script>
    <script type="text/javascript" src="../js/jquery.niftymodals/js/jquery.modalEffects.js"></script>   
    <script type="text/javascript" src="../js/bootstrap.summernote/dist/summernote.min.js"></script>
    <script type="text/javascript" src="../js/jquery.datatables/jquery.datatables.min.js"></script>
    <script type="text/javascript" src="../js/jquery.datatables/bootstrap-adapter/js/datatables.js"></script>
    <script type="text/javascript" src="../js/jquery.datatables/jquery.datatables.min.js"></script>
  <script type="text/javascript" src="../js/jquery.datatables/bootstrap-adapter/js/datatables.js"></script>


    <script type="text/javascript">
      //Add dataTable Functions
      var functions = $('<div class="btn-group"><button class="btn btn-default btn-xs" type="button">Actions</button><button data-toggle="dropdown" class="btn btn-xs btn-primary dropdown-toggle" type="button"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button><ul role="menu" class="dropdown-menu pull-right"><li><a href="#">Edit</a></li><li><a href="#">Copy</a></li><li><a href="#">Details</a></li><li class="divider"></li><li><a href="#">Remove</a></li></ul></div>');
      $("#datatable tbody tr td:last-child").each(function(){
        $(this).html("");
        functions.clone().appendTo(this);
      });
      
      //Add dataTable Icons
      var functions = $('');
      $("#datatable-icons tbody tr td:last-child").each(function(){
        $(this).html("");
        functions.clone().appendTo(this);
      });
      
      $(document).ready(function(){
        //initialize the javascript
        App.init();
        App.dataTables();
        
       /* Formating function for row details */
       
        /*
         * Insert a 'details' column to the table
         */
        var nCloneTh = document.createElement( 'th' );
        var nCloneTd = document.createElement( 'td' );
        nCloneTd.innerHTML = '<img class="toggle-details" src="../images/plus.png" />';
        nCloneTd.className = "center";
         
        $('#datatable2 thead tr').each( function () {
            this.insertBefore( nCloneTh, this.childNodes[0] );
        } );
         
        $('#datatable2 tbody tr').each( function () {
            this.insertBefore(  nCloneTd.cloneNode( true ), this.childNodes[0] );
        } );
         
        /*
         * Initialse DataTables, with no sorting on the 'details' column
         */
        var oTable = $('#datatable2').dataTable( {
            "aoColumnDefs": [
                { "bSortable": false, "aTargets": [ 0 ] }
            ],
            "aaSorting": [[1, 'asc']]
        });
         
        /* Add event listener for opening and closing details
         * Note that the indicator for showing which row is open is not controlled by DataTables,
         * rather it is done here
         */
        $('#datatable2').delegate('tbody td img','click', function () {
            var nTr = $(this).parents('tr')[0];
            if ( oTable.fnIsOpen(nTr) )
            {
                /* This row is already open - close it */
                this.src = "../images/plus.png";
                oTable.fnClose( nTr );
            }
            else
            {
                /* Open this row */
                this.src = "../images/minus.png";
                oTable.fnOpen( nTr, fnFormatDetails(oTable, nTr), 'details' );
            }
        } );
        
      $('.dataTables_filter input').addClass('form-control').attr('placeholder','Search');
      $('.dataTables_length select').addClass('form-control');    

        //Horizontal Icons dataTable
        $('#datatable-icons').dataTable();
      });
    </script>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script type="text/javascript" src="../js/jquery.magnific-popup/dist/jquery.magnific-popup.min.js"></script>
   
  <script type="text/javascript">
    $(document).ready(function(){
    
      $('.image-zoom').magnificPopup({ 
        type: 'image',
        mainClass: 'mfp-with-zoom', // this class is for CSS animation below
        zoom: {
          enabled: true, // By default it's false, so don't forget to enable it
          duration: 300, // duration of the effect, in milliseconds
          easing: 'ease-in-out', // CSS transition easing function 
          opener: function(openerElement) {
            var parent = $(openerElement);
            return parent;
          }
        }
      });
      
      //Nifty Modals Init
      $('.md-trigger').modalEffects();
      
      //Summernote Editor
      $('#summernote').summernote({ 
        height: 100,
        toolbar: [
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']]
      ]});
    });
  </script>
  
    <script src="../js/behaviour/voice-commands.js"></script>
  <script src="../js/bootstrap/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/jquery.flot/jquery.flot.js"></script>
  <script type="text/javascript" src="../js/jquery.flot/jquery.flot.pie.js"></script>
  <script type="text/javascript" src="../js/jquery.flot/jquery.flot.resize.js"></script>
  <script type="text/javascript" src="../js/jquery.flot/jquery.flot.labels.js"></script>
  </body>
  </html>
