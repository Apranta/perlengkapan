<div class="main">
	<div class="main-content">
		<div class="panel panel-headline">
			<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>List Barang</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?= base_url('admin_perlengkapan/') ?>">Perlengkapan</a>
                        </li>
                        <li class="active">
                            <strong>List Barang</strong>
                        </li>
                    </ol>
                </div>
            </div>
		</div>
		<div class="panel-body white-bg">
            <div class="ibox">
                <div class="panel panel-heading">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add">
										  +
									</button>
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
										Import
									</button>
                </div>
								<?= $this->session->flashdata('msg') ?>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered dataTables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
																<th>Keterangan</th>
                                <th id="last-child">Action</th>
                            </tr>
                        </thead>
                        <tbody>
													<?php $i = 1; foreach ($data as $barang): ?>
														<tr>
                                <td><?=$i++?></td>
                                <td><?=$barang->nama_barang?></td>
                                <td><?=$barang->jumlah_barang?></td>
																<td><?=$barang->keterangan?></td>
                                <td>
                                    <a href="<?= base_url('admin_perlengkapan/detail_barang') ?>" class="btn btn-default btn-circle"><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
													<?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
	</div>
</div>

<!-- input barang -->
<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Tambah Barang</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<?= form_open('admin-perlengkapan/list-barang')?>
				<div class="form-group">
					<label for="nama_barang">Nama Barang</label>
					<input type="text" class="form-control" id="nama_barang" name="nama_barang" >
				</div>
				<div class="form-group">
					<label for="jumlah_barang">Nama Barang</label>
					<input type="number" class="form-control" id="jumlah_barang" name="jumlah_barang" >
				</div>
				<div class="form-group">
					<label for="keterangan">Keterangan</label>
					<input type="text" class="form-control" id="keterangan" name="keterangan" >
				</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
      </div>
			<?=form_close()?>
    </div>
  </div>
</div>
<!-- input barang -->

<script>
    $(document).ready(function(){
        $('.dataTables-example').DataTable({
            pageLength: 25,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                {extend: 'csv',
								exportOptions: {
										columns: 'th:not(:last-child)'
								}
								},
                {extend: 'excel',
								exportOptions: {
										columns: 'th:not(:last-child)'
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
										columns: 'th:not(:last-child)'
								}
							}
            ]

        });

    });
	</script>
