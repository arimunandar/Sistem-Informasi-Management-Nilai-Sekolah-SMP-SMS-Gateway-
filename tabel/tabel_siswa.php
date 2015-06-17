<div class="row">
	<div class="col-md-12">
		<h3 class="spacer-bottom-sm">Management Siswa</h3> 
		<a href="?user=Siswa&&create=Siswa" class="btn btn-primary"><span class="fa fa-pencil"></span> Create</a>
		<hr/>		
		<?php 
			if (isset($_GET['create'])) {
				if ($_GET['create'] == 'Siswa') {
					include('form/create_siswa.php');
					require_once('core/create.php');
				}
			}elseif (isset($_GET['edit-siswa'])) {
				include('form/edit_siswa.php');
			}elseif (isset($_GET['del-siswa'])) {
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
							<th>NIS</th>
							<th>Tempat / Tanggal Lahir</th>
							<th>Telepon</th>
							<th>Gender</th>
							<th>Status</th>
							<th>Alamat</th>
							<th>Kelas</th>
							<th style="width: 17%;" class="text-center">Action</th>
						</tr>
					</thead>
					<tbody class="no-border-x">
						<?php

							$siswa 	= 	mysql_query("SELECT *, kelas.kelas_nama FROM siswa 
													INNER JOIN kelas ON siswa.kelas_id=kelas.kelas_id
													ORDER BY siswa_nama ASC");
							$no 	= 	1;

							while ($data=mysql_fetch_array($siswa)) {
						?>
						<tr>
							<td class="text-center"><?php echo $no; ?></td>
							<td><?php echo $data['siswa_nama']; ?></td>
							<td><?php echo $data['siswa_nis']; ?></td>							
							<td><?php echo $data['siswa_ttl']; ?></td>
							<td><?php echo $data['siswa_telp']; ?></td>
							<td><?php echo $data['siswa_gender']; ?></td>
							<td><?php echo $data['siswa_status']; ?></td>
							<td><?php echo $data['siswa_alamat']; ?></td>
							<td><?php echo $data['kelas_nama']; ?></td>
							<td class="text-center">
								<a href="?user=Siswa&&edit-siswa=<?php echo $data['siswa_id']; ?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
								<a href="?user=Siswa&&del-siswa=<?php echo $data['siswa_id']; ?>" class="btn btn-danger"><span class="fa fa-trash-o"></span> Delete</a>
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