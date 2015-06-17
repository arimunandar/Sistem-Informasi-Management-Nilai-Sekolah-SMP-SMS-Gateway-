<div class="row">
	<div class="col-md-12">		 				
		<?php 
			if (isset($_GET['create'])) {
				if ($_GET['create'] == 'Raport') {
					include('form/create_raport.php');
					require_once('core/create.php');
				}
			}elseif (isset($_GET['tampil'])) {
				if ($_GET['tampil'] == 'Raport') {
					include('form/tampil_raport.php');
					include('core/delete.php');
				}elseif ($_GET['tampil'] == 'DetailRaport') {
					include('form/tampil_detail_raport.php');
					include('core/delete.php');
				}
			}elseif (isset($_GET['edit-raport'])) {
				include('core/edit.php');
				include('form/edit_nilai_raport.php');
			}else {
		?>

				<div class="col-md-3">
					<a href="?nilai=Raport&&create=Raport">
						<div class="btn btn-primary" style="height:100px;width:200px;">
							<h1><span class="fa fa-pencil"></span></h1>
							Input Nilai Raport
						</div>
					</a>
				</div>	
				<div class="col-md-3">
					<a href="?nilai=Raport&&tampil=DetailRaport">
						<div class="btn btn-primary" style="height:100px;width:200px;">
							<h1><span class="fa fa-search"></span></h1>
							Cari Nilai Mata Pelajaran
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="?nilai=Raport&&tampil=Raport">
						<div class="btn btn-primary" style="height:100px;width:200px;">
							<h1><span class="fa fa-search"></span></h1>
							Cari Nilai Raport
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="?nilai=Kirim">
						<div class="btn btn-primary" style="height:100px;width:200px;">
							<h1><span class="fa fa-envelope"></span></h1>
							Kirim Nilai Raport
						</div>
					</a>
				</div>	
		<?php
			}
		?>										
	</div>
</div>