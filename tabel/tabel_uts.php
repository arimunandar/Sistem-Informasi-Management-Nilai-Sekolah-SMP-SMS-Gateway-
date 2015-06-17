<div class="row">
	<div class="col-md-12">		 				
		<?php 
			if (isset($_GET['create'])) {
				if ($_GET['create'] == 'UTS') {
					include('form/create_uts.php');
					require_once('core/create.php');
				}
			}elseif (isset($_GET['tampil'])) {
				if ($_GET['tampil'] == 'UTS') {
					include('form/tampil_uts.php');
					include('core/delete.php');
				}
			}elseif (isset($_GET['edit-uts'])) {
				include('core/edit.php');
				include('form/edit_nilai_uts.php');
			}else {
		?>
				<div class="col-md-3">
					<a href="?nilai=UTS&&create=UTS">
						<div class="btn btn-primary" style="height:100px;width:200px;">
							<h1><span class="fa fa-pencil"></span></h1>
							Input Nilai UTS
						</div>
					</a>
				</div>	
				<div class="col-md-3">
					<a href="?nilai=UTS&&tampil=UTS">
						<div class="btn btn-primary" style="height:100px;width:200px;">
							<h1><span class="fa fa-search"></span></h1>
							Cari Nilai UTS
						</div>
					</a>
				</div>			
		<?php
			}
		?>										
	</div>
</div>