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
                    <h3>Permintaan Barang Masuk</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered dataTables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Penempatan Barang</th>
                                <th>Disetujui</th>
                                <th>Barang Sampai</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Komputer</td>
                                <td>2</td>
                                <td>Ruang Admin Fasilkom</td>
                                <td>Disetujui</td>
                                <td>
                                    <button class="btn btn-success"> Konfirmasi</button>
                                </td>
                                <td>
                                    <a href="<?= base_url('admin_unit/detail_barang') ?>" class="btn btn-default btn-circle"><i class="fa fa-eye"></i></a>
                                    <button class="btn btn-primary btn-circle"><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-danger btn-circle" onclick=""><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Proyektor</td>
                                <td>3</td>
                                <td>Ruang Admin Fasilkom</td>
                                <td>Disetujui</td>
                                <td>
                                    <button class="btn btn-success"> Konfirmasi</button>
                                </td>
                                <td>
                                    <a href="<?= base_url('admin_unit/detail_barang') ?>" class="btn btn-default btn-circle"><i class="fa fa-eye"></i></a>
                                    <button class="btn btn-primary btn-circle"><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-danger btn-circle" onclick=""><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Meja</td>
                                <td>4</td>
                                <td>Ruang Admin Fasilkom</td>
                                <td>Disetujui</td>
                                <td>
                                    <button class="btn btn-danger"> Konfirmasi</button>
                                </td>
                                <td>
                                    <a href="<?= base_url('admin_unit/detail_barang') ?>" class="btn btn-default btn-circle"><i class="fa fa-eye"></i></a>
                                    <button class="btn btn-primary btn-circle"><i class="fa fa-edit"></i></button>
                                    <button class="btn btn-danger btn-circle" onclick=""><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <?= $this->session->flashdata('msg') ?>
                <button class="btn btn-primary" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Tambah Permintaan</button>
                <hr>
                <div class="panel panel-heading">
                    <h3>Riwayat Permintaan Barang</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered dataTables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Penempatan Barang</th>
                                <th>Disetujui</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Komputer</td>
                                <td>2</td>
                                <td>Lab RPL</td>
                                <td>Disetujui</td>
                                <td>Barang Sampai</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Proyektor</td>
                                <td>2</td>
                                <td>Lab RPL</td>
                                <td>Disetujui</td>
                                <td>Barang Sampai</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Meja</td>
                                <td>4</td>
                                <td>Ruang Akademik</td>
                                <td>Disetujui</td>
                                <td>Barang Sampai</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
	</div>
</div>

<div class="modal inmodal" id="add" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated bounceInRight">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Tambah Data</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input type="text" name="nama" class="form-control" required id="nama">
                </div>
                <div class="form-group">
                    <label>Jumlah</label>
                    <input type="number" name="jumlah" class="form-control" required id="jumlah">
                </div>
                <div class="form-group">
                    <label>Penempatan Barang</label>
                    <input type="text" name="lokasi" class="form-control" required id="lokasi">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
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
                { extend: 'copy'},
                {extend: 'csv'},
                {extend: 'excel', title: ''},
                {extend: 'pdf', title: ''},

                {extend: 'print',
                    customize: function (win){
                        $(win.document.body).addClass('white-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                }
                }
            ]

        });

    });