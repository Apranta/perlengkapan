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
                        <li>
                            <a href="<?= base_url('admin_perlengkapan/barang_tersedia') ?>">Barang Tersedia</a>
                        </li>
                        <li class="active">
                            <strong>Detail Barang</strong>
                        </li>
                    </ol>
                </div>
            </div>
		</div>
		<div class="panel-body white-bg">
            <div class="ibox">
                <div class="panel panel-heading">
                    <h3>Detail Barang</h3>
                </div>
                <div class="col-lg-6 col-md-6">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered dataTables-example">
                        <tbody>
                            <tr>
                                <td>Nama Barang</td>
                                <td>Komputer</td>
                            </tr>
                            <tr>
                                <td>Jumlah</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>Disetujui</td>
                                <td>Disetujui</td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td>Barang Sampai</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <a href="<?= base_url('admin_perlengkapan/barang_tersedia') ?>" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
            </div>
        </div>
	</div>
</div>
