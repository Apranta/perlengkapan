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
                            <strong>Pengembalian Barang</strong>
                        </li>
                    </ol>
                </div>
            </div>
		</div>
		<div class="panel-body white-bg">
            <div class="ibox">
                <div class="panel panel-heading">
                    <h3>Pengembalian Barang Masuk</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered dataTables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Lokasi Barang</th>
                                <th>Tanggal Pengembalian</th>
                                <th>Barang Dikembalikan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Komputer</td>
                                <td>2</td>
                                <td>Ruang Admin Fasilkom</td>
                                <td>3-3-2018</td>
                                <td>
                                    <button class="btn btn-danger"> Konfirmasi</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Proyektor</td>
                                <td>3</td>
                                <td>Ruang Admin Fasilkom</td>
                                <td>28-3-2018</td>
                                <td>
                                    <button class="btn btn-danger"> Konfirmasi</button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Meja</td>
                                <td>4</td>
                                <td>Ruang Admin Fasilkom</td>
                                <td>4-3-2018</td>
                                <td>
                                    <button class="btn btn-danger"> Konfirmasi</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                <div class="panel panel-heading">
                    <h3>Riwayat Pengembalian Barang</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered dataTables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Penempatan Barang</th>
                                <th>Tanggal Pengembalian</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Komputer</td>
                                <td>2</td>
                                <td>Lab RPL</td>
                                <td>20-2-2018</td>
                                <td>Dikembalikan</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Proyektor</td>
                                <td>2</td>
                                <td>Lab RPL</td>
                                <td>20-2-2018</td>
                                <td>Dikembalikan</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Meja</td>
                                <td>4</td>
                                <td>Ruang Akademik</td>
                                <td>12-2-2018</td>
                                <td>Dikembalikan</td>
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