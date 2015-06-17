<div class="row">
	<div class="col-md-12">
		<h3 class="spacer-bottom-sm">Management Tahun Ajaran</h3> 
		<a href="?akademik=Tahun&&create=Tahun" class="btn btn-primary"><span class="fa fa-pencil"></span> Create</a>
		<hr/>		
		<?php 
			if (isset($_GET['create'])) {
				if ($_GET['create'] == 'Tahun') {
					include('form/create_tahun.php');
					require_once('core/create.php');
				}
			}elseif (isset($_GET['edit-tahun'])) {
				include('form/edit_tahun.php');
			}elseif (isset($_GET['del-tahun'])) {
				include('core/delete.php');
			}
		?>
		<div class="block-flat no-padding">
			<div class="content">
				<table class="no-border blue">
					<thead class="no-border">
						<tr>
							<th style="width: 5%;" class="text-center">No</th>
							<th>Tahun Ajaran</th>
							<th style="width: 17%;" class="text-center">Action</th>
						</tr>
					</thead>
					<tbody class="no-border-x">
						<?php

							$tahun 	= 	mysql_query("SELECT * FROM tahun");
							$no 	= 	1;

							while ($data=mysql_fetch_array($tahun)) {
						?>
						<tr>
							<td class="text-center"><?php echo $no; ?></td>
							<td><?php echo $data['tahun_nama']; ?></td>
							<td class="text-center">
								<a href="?akademik=Tahun&&edit-tahun=<?php echo $data['tahun_id']; ?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
								<a href="?akademik=Tahun&&del-tahun=<?php echo $data['tahun_id']; ?>" class="btn btn-danger"><span class="fa fa-trash-o"></span> Delete</a>
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