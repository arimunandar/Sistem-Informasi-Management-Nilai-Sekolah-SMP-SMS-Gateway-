<div class="row">
	<div class="col-md-12">		 				
		<?php 
			if (isset($_GET['create'])) {
				if ($_GET['create'] == 'Ulangan2') {
					include('form/create_ulangan2.php');
					require_once('core/create.php');
				}
			}elseif (isset($_GET['tampil'])) {
				if ($_GET['tampil'] == 'Ulangan2') {
					include('form/tampil_uh2.php');
					include('core/delete.php');
				}
			}elseif (isset($_GET['edit-ulangan2'])) {
				include('core/edit.php');
				include('form/edit_nilai_uh2.php');
			}else {
		?>
			<div class="col-md-3">
				<a href="?nilai=Ulangan2&&create=Ulangan2">
					<div class="btn btn-primary" style="height:100px;width:200px;">
						<h1><span class="fa fa-pencil"></span></h1>
						Input Nilai Ulangan 2
					</div>
				</a>
			</div>	
			<div class="col-md-3">
				<a href="?nilai=Ulangan2&&tampil=Ulangan2">
					<div class="btn btn-primary" style="height:100px;width:200px;">
						<h1><span class="fa fa-search"></span></h1>
						Cari Nilai Ulangan 2
					</div>
				</a>
			</div>				
		<?php
			}
		?>										
	</div>
</div>