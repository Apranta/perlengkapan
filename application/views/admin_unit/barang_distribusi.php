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
                            <strong>Data Barang Terdistribusi</strong>
                        </li>
                    </ol>
                </div>
            </div>
		</div>
		<div class="panel-body white-bg">
            <div class="ibox">
                <div class="panel panel-heading">
                    <h3>Data Barang Terdistribusi</h3>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered dataTables-example">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kode</th>
                                <th>Nama Barang</th>
                                <th>Tempat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Kom1</td>
                                <td>Komputer</td>
                                <td>Ruang Admin</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Pro1</td>
                                <td>Proyektor</td>
                                <td>Ruang Lab</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Me1</td>
                                <td>Meja</td>
                                <td>Ruang Lab</td>
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