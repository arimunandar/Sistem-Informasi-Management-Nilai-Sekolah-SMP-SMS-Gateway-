<div class="row">
	<div class="col-md-12">
		<h3 class="spacer-bottom-sm">Management Pelajaran</h3> 
		<a href="?akademik=Pelajaran&&create=Pelajaran" class="btn btn-primary"><span class="fa fa-pencil"></span> Create</a>
		<hr/>		
		<?php 
			if (isset($_GET['create'])) {
				if ($_GET['create'] == 'Pelajaran') {
					include('form/create_pelajaran.php');
					require_once('core/create.php');
				}
			}elseif (isset($_GET['edit-pelajaran'])) {
				include('form/edit_pelajaran.php');
			}elseif (isset($_GET['del-pelajaran'])) {
				include('core/delete.php');
			}
		?>
		<div class="block-flat no-padding">
			<div class="content">
				<table class="no-border blue">
					<thead class="no-border">
						<tr>
							<th style="width: 5%;" class="text-center">No</th>
							<th>Mata Pelajaran</th>
							<th style="width: 17%;" class="text-center">Action</th>
						</tr>
					</thead>
					<tbody class="no-border-x">
						<?php

							$pelajaran 	= 	mysql_query("SELECT * FROM pelajaran");
							$no 	= 	1;

							while ($data=mysql_fetch_array($pelajaran)) {
						?>
						<tr>
							<td class="text-center"><?php echo $no; ?></td>
							<td><?php echo $data['pelajaran_nama']; ?></td>
							<td class="text-center">
								<a href="?akademik=Pelajaran&&edit-pelajaran=<?php echo $data['pelajaran_id']; ?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
								<a href="?akademik=Pelajaran&&del-pelajaran=<?php echo $data['pelajaran_id']; ?>" class="btn btn-danger"><span class="fa fa-trash-o"></span> Delete</a>
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