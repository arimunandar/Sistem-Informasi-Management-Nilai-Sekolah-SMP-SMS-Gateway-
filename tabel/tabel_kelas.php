<div class="row">
	<div class="col-md-12">
		<h3 class="spacer-bottom-sm">Management Kelas</h3> 
		<a href="?akademik=Kelas&&create=Kelas" class="btn btn-primary"><span class="fa fa-pencil"></span> Create</a>
		<hr/>		
		<?php 
			if (isset($_GET['create'])) {
				if ($_GET['create'] == 'Kelas') {
					include('form/create_kelas.php');
					require_once('core/create.php');
				}
			}elseif (isset($_GET['edit-kelas'])) {
				include('form/edit_kelas.php');
			}elseif (isset($_GET['del-kelas'])) {
				include('core/delete.php');
			}
		?>
		<div class="block-flat no-padding">
			<div class="content">
				<table class="no-border blue">
					<thead class="no-border">
						<tr>
							<th style="width: 5%;" class="text-center">No</th>
							<th>Kelas</th>
							<th style="width: 17%;" class="text-center">Action</th>
						</tr>
					</thead>
					<tbody class="no-border-x">
						<?php

							$kelas 	= 	mysql_query("SELECT * FROM kelas");
							$no 	= 	1;

							while ($data=mysql_fetch_array($kelas)) {
						?>
						<tr>
							<td class="text-center"><?php echo $no; ?></td>
							<td><?php echo $data['kelas_nama']; ?></td>
							<td class="text-center">
								<a href="?akademik=Kelas&&edit-kelas=<?php echo $data['kelas_id']; ?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
								<a href="?akademik=Kelas&&del-kelas=<?php echo $data['kelas_id']; ?>" class="btn btn-danger"><span class="fa fa-trash-o"></span> Delete</a>
							</td>
						</tr>
						<?php
							$no++;	
							}
						?>						
					</tbody>
				</table>
			</div>
		</div>					
	</div>
</div>