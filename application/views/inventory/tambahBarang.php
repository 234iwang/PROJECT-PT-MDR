<div class="page-heading">
    <h1 class="page-title"><?= $title ?></h1>
</div>
<div class="page-content fade-in-up">
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">
                Form tambah barang
            </div>
        </div>
        <div class="ibox-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="nama_barang" class="form-label">Nama barang</label>
                        <input type="text" class="form-control" id="nama_barang" placeholder="Masukkan nama barang...">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="stok_barang" class="form-label">Stok barang</label>
                        <input type="number" class="form-control" id="stok_barang" min="1">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="jenis_barang" class="form-label">Jenis</label>
                        <select name="jenis_barang" id="jenis_barang" class="form-control">
                            <option value="">-- Pilih jenis --</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="satuan_barang" class="form-label">Satuan</label>
                        <select name="satuan_barang" id="satuan_barang" class="form-control">
                            <option value="">-- Pilih satuan --</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row float-right">
        <div class="col-md-12">
            <a href="<?= base_url('Barang') ?>" class="btn btn-danger" id="deleteBarang" style="cursor: pointer;"><i class="ti ti-reload"></i> Kembali</a>
            <button class="btn btn-success" id="simpanBarang" style="cursor: pointer;"><i class="ti ti-save"></i> Simpan</button>
        </div>
    </div>
</div>