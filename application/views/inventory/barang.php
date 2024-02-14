<div class="page-heading">
    <h1 class="page-title">Master Barang</h1>
</div>
<div class="page-content fade-in-up">
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">
                <a href="<?= base_url('Barang/tambah') ?>" class="btn btn-primary"><i class="ti ti-plus"></i> Tambah barang</a>
            </div>
        </div>
        <div class="ibox-body">
            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Barang</th>
                        <th class="text-center">Stok</th>
                        <th class="text-center">Satuan</th>
                        <th class="text-center">Jenis</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center">
                        <td>1</td>
                        <td>Susu</td>
                        <td>24</td>
                        <td>Karton</td>
                        <td>Kardus</td>
                        <td>
                            <a href="<?= base_url('Barang/edit/id_barang') ?>" class="btn btn-warning" title="Edit barang"><i class="ti ti-pencil"></i></a>
                            <button class="btn btn-danger" id="deleteBarang" title="Hapus barang" style="cursor: pointer;"><i class="ti ti-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>