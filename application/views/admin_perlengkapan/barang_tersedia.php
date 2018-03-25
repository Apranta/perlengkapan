<div class="main">
	<div class="main-content">
		<div class="panel panel-headline">
			<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Dashboard</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?= base_url('admin_perlengkapan/') ?>">Perlengkapan</a>
                        </li>
                        <li class="active">
                            <strong>Barang Tersedia</strong>
                        </li>
                    </ol>
                </div>
            </div>
		</div>
		<div class="panel-body white-bg">
            <div class="ibox">
                <div class="panel panel-heading">
                    <h3>Barang Tersedia</h3>
                </div>
                <table>
                    <tr>
                        <th>
                            <div class="form form-group">
                                <input type="file" name="" class="form-control"> 
                            </div>
                        </th>
                        <th>
                            <div class="from form-group">
                                <input type="submit" name="" value="Submit" class="btn btn-primary">
                            </div>
                        </th>
                    </tr>
                </table>
                <hr>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered dataTables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kode</th>
                                <th>Nama Barang</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Kom1</td>
                                <td>Komputer</td>
                                <td>
                                    <a href="<?= base_url('admin_perlengkapan/detail_barang') ?>" class="btn btn-default btn-circle"><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Pro1</td>
                                <td>Proyektor</td>
                                <td>
                                    <a href="<?= base_url('admin_perlengkapan/detail_barang') ?>" class="btn btn-default btn-circle"><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Me1</td>
                                <td>Meja</td>
                                <td>
                                    <a href="<?= base_url('admin_perlengkapan/detail_barang') ?>" class="btn btn-default btn-circle"><i class="fa fa-eye"></i></a>
                                </td>
                            </tr>
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