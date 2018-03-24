<div class="main">
	<div class="main-content">
		<div class="panel panel-headline">
			<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Dashboard</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?= base_url('admin-perlengkapan/') ?>">Perlengkapan</a>
                        </li>
                        <li class="active">
                            <strong>Penempatan barang</strong>
                        </li>
                    </ol>
                </div>
            </div>
		</div>
		<div class="panel-body white-bg">
            <div class="ibox">
                <div class="panel panel-heading">
                    <h3>Permintaan Penempatan Barang</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered dataTables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Penempatan</th>
																<th>Admin/Unit</th>
																<th>Waktu</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
													<?php $i = 1; foreach ($data as $permintaan): ?>
														<?php if ($permintaan->disetujui != 2 && $permintaan->barang_sampai != 1): ?>
															<?php
																$dipakai = $this->Penempatan_m->SUM(['id_barang' => $permintaan->id_barang,'disetujui' =>1],'alokasi')[0]->alokasi;
																if(!isset($dipakai)){
																	$dipakai = 0;
																}
																$dialokasikan = $this->Penempatan_m->SUM(['id_barang' => $permintaan->id_barang,'disetujui' =>0],'alokasi')[0]->alokasi;
																if(!isset($dialokasikan)){
																	$dialokasikan = 0;
																}
																$totalalokasi = $dipakai + $dialokasikan;
																$stok = $permintaan->jumlah_barang-$dipakai;
															 ?>
															<?php if (($stok == $permintaan->alokasi && $permintaan->disetujui != 1) ||($dialokasikan > $stok && $permintaan->disetujui != 1) ): ?>
																<tr class="warning">
															<?php elseif($stok < $permintaan->alokasi && $permintaan->disetujui != 1): ?>
																<tr class="danger">
															<?php elseif($permintaan->disetujui == 1): ?>
																<tr class="success">
															<?php else: ?>
																<tr>
															<?php endif; ?>
	                                <td><?=$i++?></td>
	                                <td><?=$permintaan->nama_barang?></td>
																	<?php if ($permintaan->disetujui == 1): ?>
																		<td><?=$permintaan->alokasi?></td>
																		<?php else: ?>
		                                <td><?=$permintaan->alokasi?>/<?=$stok?></td>
																	<?php endif; ?>
	                                <td><?=$permintaan->nama_ruangan?></td>
																	<?php $adm = $this->Admin_unit_m->get_row(['username' => $permintaan->adm_unit]); ?>
																	<td><?=$adm->nama_adm_unit?> / <?=$adm->nama_unit?></td>
																	<td><?=$permintaan->waktu_permintaan?></td>
	                                <td>
																		<?php if ($permintaan->disetujui == 0): ?>
																			<button class="btn btn-primary btn-circle" onclick="konfirmasi(<?=$permintaan->id_penempatan?>)"><i class="fa fa-check"></i></button>
																		<?php else: ?>
																			<button class="btn btn-primary btn-circle" disabled><i class="fa fa-check"></i></button>
																		<?php endif; ?>
																		<button class="btn btn-danger btn-circle" onclick="batalkan(<?=$permintaan->id_penempatan?>)"><i class="fa fa-close"></i></button>
	                                </td>
	                            </tr>
														<?php endif; ?>
													<?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?= $this->session->flashdata('msg') ?>
                <hr>
                <div class="panel panel-heading">
                    <h3>Daftar Penempatan Barang</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered dataTables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Penempatan Barang</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
													<?php $i = 1; foreach ($data as $permintaan): ?>
														<?php if ($permintaan->disetujui == 1): ?>
															<tr>
	                                <td><?=$i++?></td>
	                                <td><?=$permintaan->nama_barang?></td>
	                                <td><?=$permintaan->alokasi?></td>
	                                <td><?=$permintaan->nama_ruangan?></td>
	                                <td>
																		<?=$permintaan->keterangan_status?>
	                                </td>
	                            </tr>
														<?php endif; ?>
													<?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
	</div>
</div>

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
				  title: "Setujui permintaan?",
				  text: "Ya, untuk menyetujui permintaan",
				  icon: "info",
				  buttons: {
						cancel: "Tidak",
						confirm:"Ya"
					}
				})
				.then((konfirm) => {
				  if (konfirm) {
						$.ajax({
                url: "<?= base_url('admin-perlengkapan/penempatan-barang') ?>",
                type: 'POST',
                data: {
                    id: id,
                    setuju: true
                },
                success: function() {
									location.reload();
                }
            });
				  }
				});
		}

		function batalkan(id) {
			swal({
				  title: "Batalkan permintaan?",
				  text: "Ya, batalkan permintaan",
				  icon: "warning",
				  buttons: {
						cancel: "Tidak",
						confirm:"Ya"
					},
					dangerMode: true
				})
				.then((konfirm) => {
				  if (konfirm) {
						$.ajax({
                url: "<?= base_url('admin-perlengkapan/penempatan-barang') ?>",
                type: 'POST',
                data: {
                    id: id,
                    batal: true
                },
                success: function() {
									location.reload();
                }
            });
				  }
				});
		}
	</script>
