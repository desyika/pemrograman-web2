<?= $this->extend('admin/template');?>

<?= $this->section('main');?>
<h2 class="mb-5">Daftar bluse</h2>
<?php if(session('sukses')):?>
<div class="mb3">
    <div class="alert alert-success">
        <strong>berhasil</strong> <?php session('sukses');?>
    </div>
</div>
<?php endif;?>

<?php if(session('error')):?>
<div class="mb3">
    <div class="alert alert-success">
        <strong>gagal!</strong> <?php session('error');?>
    </div>
</div>
<?php endif;?>


<div class="">
    <a href="<?= base_url('admin/daftar-bluse/tambah')?>" class="btn 
    btn-primary">tambah buku</a>
</div>
<div class="mb-5">
    <table class="table table-stripped">
        <head>
            <tr>
                <th scope="col">#</th>
                <th scope="col">model bluse</th>
                <th scope="col">ukuran</th>
                <th scope="col">warnat</th>
                <th scope="col">katalog</th>
                <th scope="col">harga</th>
                <th scope="col">aksi</th>
            </tr>
            <thead>
                <tbody>
                    <?php foreach($bluses as $bluse): ?>
                    <tr>
                        <th scope="row"><?= $bluse['id_produk']?></th>
                        <td><?= $bluse['ukuran']?></td>
                        <td><?= $bluse['warna']?></td>
                        <td><?= $bluse['harga']?></td>
                        <td><?= $bluse['stok']?></td>
                        <td><?= $bluse['katalog']?></td>
                        <td>
                            <img src="<?= base_url('file-image/') . $bluse['katalog']?>" alt="" style="width: 150px
                            ; height:auto;">
                        </td>
                        <td>
                             <?= $bluse['harga']?>
                        </td>
                        <td>
                            <a href="<?= base_url('admin/daftar-bluse/edit') .  $bluse['id_produk']?>" class="btn
                            btn-success">edit</a>
                            <a href="<?= base_url('admin/daftar-bluse/hapus') .  $bluse['id_produk']?>" class="btn
                            btn-danger">hapus</a>
                        </td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </thead>
        </head>
    </table>
</div>

<?= $this->endSection();?>