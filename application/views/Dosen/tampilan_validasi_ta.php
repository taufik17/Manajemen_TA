<section class="content">
						<div class="box">
								<div class="box-header">
										<h3 class="box-title">Data Lengkap Mahasiswa TA</h3>
								</div>
								<!-- /.box-header -->
								<div class="box-body">
										<table id="example1" class="table table-bordered table-striped">
												<thead>
												<tr>
														<th>Nomor</th>
														<th>NIM</th>
														<th>Nama</th>
														<th>Judul TA</th>
														<th>Jurusan</th>
														<th>File Proposal</th>
														<th>Aksi</th>
												</tr>
												</thead>
												<tbody>
												<tr>
													<?php
			        		$no = 1;
			        		foreach ($mhs->result() as $row ) {
			        		?>
														<td><?php echo $no++; ?></td>
														<td><?php echo $row->NIM ;?></td>
														<td><?php echo $row->Nama_mhs ;?></td>
														<td><?php echo $row->Judul_TA ;?></td>
														<td><?php echo $row->Jurusan ;?></td>
														<td> <button class="btn"><i class="fa fa-download"></i> Download</button>
														</td>
														<td> <a href="#" class="btn btn-success btn-sm">Accept</a>
																			<a href="#" class="btn btn-danger btn-sm">Decline</a>
														</td>
												</tr>
												<?php }?>
												</tbody>
										</table>
								</div>
								<!-- /.box-body -->
						</div>
						</section>
