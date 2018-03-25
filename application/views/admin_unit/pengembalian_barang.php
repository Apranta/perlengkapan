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
                    <h3>Pengembalian Barang</h3>
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
                        </tbody>
                    </table>
                </div>
                
                <?= $this->session->flashdata('msg') ?>

                <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i> Tambah Permintaan</button>
                <hr> -->

                <div class="panel panel-heading">
                    <h3>Data Pengembalian Barang</h3>
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
</div> -->

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