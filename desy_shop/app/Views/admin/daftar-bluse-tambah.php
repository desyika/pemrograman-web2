<?= $this->extend('admin/template');?>

<?= $this->section('main');?>
<h2 class="mb-5">Tambah bluse</h2>

<div class="w-50">
    <form action="<?= base_url('admin/daftar-bluse/tambah')?>" method="POST" 
    enctype="multipart/form-data">
        <div class="mb-3">
            <label for="ukuran">ukuran</label>
            <input type="text" class="form-control" name="ukuran" id="ukuran">
        </div>
        <div class="mb-3">
            <label for="warna">warna</label>
            <input type="text" class="form-control" name="warna" id="warna">
        </div>
        <div class="mb-3">
            <label for="harga">harga</label>
            <input type="text" class="form-control" name="harga" id="harga">
        </div>
        <div class="mb-3">
            <label for="katalog">katalog</label>
            <input type="file" class="form-control" name="katalog" id="katalog" class="form-control">
        </div>
        <div class="mb-3">
            <label for="stok">stok</label>
            <input type="text" class="form-control" name="stok" id="stok">
        </div>
        <div class="mb-3">
            <a href="<?= base_url('admin/daftar-bluse')?>" class="btn btn-secondary">kembali</a>
            <button type="submit" class="btn btn-primary">simpan</button>
        </div>
    </form>
</div>

<?= $this->endSection();?>