<div class="main">
	<div class="main-content">
		<div class="panel panel-headline">
			<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Dashboard</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?= base_url('admin_unit/') ?>">Unit</a>
                        </li>
                        <li class="active">
                            <strong>Permintaan Barang</strong>
                        </li>
                    </ol>
                </div>
            </div>
		</div>
		<div class="panel-body white-bg">
            <div class="ibox">
                <div class="panel panel-heading">
                    <h3>Permintaan Barang</h3>
                </div>
                <div class="table">
                    <table>
                        <tr>
                            <th width="200 px">
                                <div class="form-group">
                                    <select class="form-control">
                                        <option>Silahkan Pilih</option>
                                        <option value="nama">---</option>
                                    </select>
                                </div>
                            </th>
                            <th>
                                <div class="form-group">
                                    <input type="number" name="jumlah" class="form-control" placeholder="---">
                                </div>
                            </th>
                            <th>
                                <div class="form-group">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </th>
                        </tr>
                    </table>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered dataTables-example">
                        <thead>
                            <tr>
                                <th>#</th>
<<<<<<< HEAD
                                <th>Kode</th>
                                <th>Nama</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Kom1</td>
                                <td>Komputer</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Pro1</td>
                                <td>Proyektor</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Me1</td>
                                <td>Meja</td>
                            </tr>
=======
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Penempatan Barang</th>
                                <th>Disetujui</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
													<?php $i = 1; foreach ($data as $permintaan): ?>
														<?php if ($permintaan->disetujui != 2 && $permintaan->barang_sampai != 1): ?>
															<tr>
	                                <td><?=$i++?></td>
	                                <td><?=$permintaan->nama_barang?></td>
	                                <td><?=$permintaan->alokasi?></td>
	                                <td><?=$permintaan->nama_ruangan?></td>
	                                <td>
																		<?php if ($permintaan->disetujui == 1): ?>
																			<span class="label label-success">Ya</span>
																		<?php elseif($permintaan->disetujui == 0): ?>
																			-
																		<?php else:?>
																			<span class="label label-success">Tidak</span>
																		<?php endif; ?>
																	</td>
	                                <td>
																		<?=$permintaan->keterangan_status?>
	                                </td>
	                                <td>
																			<?php if ($permintaan->disetujui == 1): ?>
		                                    <button class="btn btn-info" onclick="konfirmasi(<?=$permintaan->id_penempatan?>)"> Diterima</button>
																				<?php else: ?>
																					<button class="btn btn-primary btn-circle"><i class="fa fa-edit"></i></button>
			                                    <button class="btn btn-danger btn-circle" onclick=""><i class="fa fa-trash"></i></button>
																			<?php endif; ?>
	                                </td>
	                            </tr>
														<?php endif; ?>
													<?php endforeach; ?>
>>>>>>> e6730f4ec73205220884b16f55ece86f2454f911
                        </tbody>
                    </table>
                </div>
                
                <?= $this->session->flashdata('msg') ?>

                <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Tambah Permintaan</button>
                <hr> -->

                <div class="panel panel-heading">
                    <h3>Data Permintaan Barang</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered dataTables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
<<<<<<< HEAD
                            <tr>
                                <td>1</td>
                                <td>Komputer</td>
                                <td>Disetujui</td>
                                <td>
                                    <button class="btn btn-success">Konfirmasi</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Proyektor</td>
                                <td>Disetujui</td>
                                <td>
                                    <button class="btn btn-danger">Konfirmasi</button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Meja</td>
                                <td>Disetujui</td>
                                <td>
                                    <button class="btn btn-danger">Konfirmasi</button>
                                </td>
                            </tr>
=======
													<?php $i = 1; foreach ($data as $permintaan): ?>
															<tr>
	                                <td><?=$i++?></td>
	                                <td><?=$permintaan->nama_barang?></td>
	                                <td><?=$permintaan->alokasi?></td>
	                                <td><?=$permintaan->nama_ruangan?></td>
	                                <td>
																		<?php if ($permintaan->disetujui == 1): ?>
																			<span class="label label-success">Ya</span>
																		<?php elseif($permintaan->disetujui == 0): ?>
																			-
																		<?php else:?>
																			<span class="label label-success">Tidak</span>
																		<?php endif; ?>
																	</td>
	                                <td>
																		<?=$permintaan->keterangan_status?>
	                                </td>
	                            </tr>
													<?php endforeach; ?>
>>>>>>> e6730f4ec73205220884b16f55ece86f2454f911
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
	</div>
</div>

<!-- <div class="modal inmodal" id="add" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated bounceInRight">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Tambah Data</h4>
            </div>
						<?=form_open('admin-unit/permintaan-barang')?>
            <div class="modal-body">
                <div class="form-group">
									<label>Nama Barang</label>
									<select class="selectpicker form-control" data-live-search="true" name="id_barang">
										<option selected disabled hidden style='display: none' value=''>Pilih Barang</option>
										<?php foreach ($barang as $item): ?>
											<?php
												$dipakai = $this->Penempatan_m->SUM(['id_barang' => $item->id_barang,'disetujui' =>1],'alokasi')[0]->alokasi;
												if(!isset($dipakai)){
													$dipakai = 0;
												}
											 ?>
											<?php if ($dipakai < $item->jumlah_barang): ?>
												<option data-tokens="<?=$item->nama_barang?>" value="<?=$item->id_barang?>"><?=$item->nama_barang?> (<b>Tersedia: <?=$item->jumlah_barang - $dipakai?></b>)</option>
											<?php endif; ?>
										<?php endforeach; ?>
									</select>
                </div>
                <div class="form-group">
                    <label>Jumlah</label>
                    <input type="number" name="alokasi" class="form-control" required id="jumlah">
                </div>
                <div class="form-group">
                    <label>Penempatan Barang</label>
										<select class="selectpicker form-control" data-live-search="true" name="id_ruangan">
											<option selected disabled hidden style='display: none' value=''>Pilih penempatan</option>
											<?php foreach ($ruangan as $ruang): ?>
												<option data-tokens="<?=$ruang->nama_ruangan?>" value="<?=$ruang->id_ruangan?>"><?=$ruang->nama_ruangan?></option>
											<?php endforeach; ?>
										</select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <input type="submit" name="tambah" value="Simpan" class="btn btn-primary">
            </div>
						<?=form_close()?>
        </div>
    </div>
</div> -->

<script>
    $(document).ready(function(){
        $('.dataTables-example').DataTable({
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                {extend: 'csv',
								exportOptions: {
										columns: [0,1,2,3,4]
								}
								},
                {extend: 'excel',
								exportOptions: {
										columns: [0,1,2,3,4]
								}
								},

                {extend: 'print',
                    customize: function (win){
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                },
								exportOptions: {
										columns: [0,1,2,3,4]
								}
							}
            ]

        });

    });

		function konfirmasi(id) {
			swal({
				  title: "Barang telah diterima?",
				  text: "konfirmasi jika barang diterima",
				  icon: "info",
				  buttons: {
						cancel: "Tidak",
						confirm:"Konfirmasi"
					}
				})
				.then((konfirm) => {
				  if (konfirm) {
						$.ajax({
                url: "<?= base_url('admin-unit/permintaan-barang') ?>",
                type: 'POST',
                data: {
                    id: id,
                    diterima: true
                },
                success: function() {
									swal("Barang diterima, tersimpan dalam riwayat permintaan").then((value) => {
										location.reload();
									});
                }
            });
				  }
				});
		}
	</script>
