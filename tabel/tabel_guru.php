<div class="row">
	<div class="col-md-12">
		<h3 class="spacer-bottom-sm">Management Guru</h3> 
		<a href="?user=Guru&&create=Guru" class="btn btn-primary"><span class="fa fa-pencil"></span> Create</a>
		<hr/>		
		<?php 
			if (isset($_GET['create'])) {
				if ($_GET['create'] == 'Guru') {
					include('form/create_guru.php');
					require_once('core/create.php');
				}
			}elseif (isset($_GET['edit-guru'])) {
				include('form/edit_guru.php');
			}elseif (isset($_GET['del-guru'])) {
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
							<th>NIP</th>
							<th>Tempat / Tanggal Lahir</th>
							<th>Status</th>
							<th>Jabaran</th>
							<th>Golongan</th>
							<th>Pelajaran</th>
							<th>Kelas</th>
							<th style="width: 17%;" class="text-center">Action</th>
						</tr>
					</thead>
					<tbody class="no-border-x">
						<?php

							$guru 	= 	mysql_query("SELECT guru.guru_id, guru.guru_nama, guru.guru_nip, guru.guru_ttl, guru.guru_status, guru.guru_jabatan, guru.guru_golongan, 
														kelas.kelas_nama, pelajaran.pelajaran_nama 
														FROM guru 
														INNER JOIN kelas ON guru.kelas_id=kelas.kelas_id 
														INNER JOIN pelajaran ON guru.pelajaran_id=pelajaran.pelajaran_id
														ORDER BY guru.guru_nama ASC");
							$no 	= 	1;

							while ($data=mysql_fetch_array($guru)) {
						?>
						<tr>
							<td class="text-center"><?php echo $no; ?></td>
							<td><?php echo $data['guru_nama']; ?></td>
							<td><?php echo $data['guru_nip']; ?></td>
							<td><?php echo $data['guru_ttl']; ?></td>
							<td><?php echo $data['guru_status']; ?></td>
							<td><?php echo $data['guru_jabatan']; ?></td>
							<td><?php echo $data['guru_golongan']; ?></td>
							<td><?php echo $data['kelas_nama']; ?></td>
							<td><?php echo $data['pelajaran_nama']; ?></td>
							<td class="text-center">
								<a href="?user=Guru&&edit-guru=<?php echo $data['guru_id']; ?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>
								<a href="?user=Guru&&del-guru=<?php echo $data['guru_id']; ?>" class="btn btn-danger"><span class="fa fa-trash-o"></span> Delete</a>
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