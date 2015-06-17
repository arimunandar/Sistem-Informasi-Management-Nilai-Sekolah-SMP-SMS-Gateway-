<div class="row">
	<div class="col-md-12">
		<h3 class="spacer-bottom-sm">Management Admin</h3> 
		<a href="?user=Admin&&create=Admin" class="btn btn-primary"><span class="fa fa-pencil"></span> Create</a>
		<hr/>		
		<?php 
			if (isset($_GET['create'])) {
				if ($_GET['create'] == 'Admin') {
					include('form/create_admin.php');
					require_once('core/create.php');
				}
			}elseif (isset($_GET['edit-admin'])) {
				include('form/edit_admin.php');
			}elseif (isset($_GET['del-admin'])) {
				include('core/delete.php');
			}
		?>
		<div class="block-flat no-padding">
			<div class="content">
				<table class="no-border blue">
					<thead class="no-border">
						<tr>
							<th style="width: 5%;" class="text-center">No</th>
							<th>Nama</th>
							<th>Username</th>
							<th style="width: 17%;" class="text-center">Action</th>
						</tr>
					</thead>
					<tbody class="no-border-x">
						<?php

							$admin 	= 	mysql_query("SELECT * FROM user");
							$no 	= 	1;

							while ($data=mysql_fetch_array($admin)) {
						?>
						<tr>
							<td class="text-center"><?php echo $no; ?></td>
							<td><?php echo $data['nama']; ?></td>
							<td><?php echo $data['username']; ?></td>
							<td class="text-center">
								<a href="?user=Admin&&edit-admin=<?php echo $data['id']; ?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
								<a href="?user=Admin&&del-admin=<?php echo $data['id']; ?>" class="btn btn-danger"><span class="fa fa-trash-o"></span> Delete</a>
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